<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\City;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Shipping;
use App\Models\ProductSize;
use App\Models\Settings;
use App\Models\Bank;
use App\Models\Coupons;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class ChekoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $provinces = Province::pluck('name', 'province_id');
        return view('frontend.pages.checkout',compact('provinces','user'));
    }

    public function Checkout(Request $request)
    {
        $settings = Settings::all();
        $user = Auth::user();
        $defaultAddresses = $user->alamat()
            ->where('default', 'yes')
            ->with(['province', 'city'])
            ->get();
        $cartItemsInput = $request->input('cart_items');
    
        if (empty($cartItemsInput)) {
            return redirect()->back()->with('error', 'Tidak ada item yang dipilih.');
        }
    
        $selectedItems = explode(',', $cartItemsInput);
    
        if (count($selectedItems) > 0) {
            $cartItems = CartItem::whereIn('id', $selectedItems)
                ->with(['product', 'productSize'])
                ->get();
    
            if ($cartItems->isEmpty()) {
                return redirect()->back()->with('error', 'Tidak ada item yang ditemukan.');
            }
    
            $cartTotal = $cartItems->sum(function ($item) {
                return $item->productSize->price * $item->quantity;
            });
    
            $validCoupons = Coupons::where('status', 'active')
                ->where('start_date', '<=', now())
                ->where('end_date', '>=', now())
                ->get();
    
            $validCoupons = $validCoupons->filter(function ($coupon) use ($cartTotal) {
                return $coupon->meetsMinimumPurchase($cartTotal) && $coupon->hasAvailableUses();
            });
    
            return view('frontend.pages.checkout', compact('cartItems', 'user', 'defaultAddresses', 'settings', 'validCoupons', 'cartTotal'));
        } else {
            return redirect()->back()->with('error', 'Tidak ada item yang dipilih.');
        }
    }
    
    

    public function payment($invoice_number)
    {
        $settings = Settings::all();
        $bank = Bank::all();
        $invoice = Invoice::where('invoice_number', $invoice_number)->firstOrFail();

        if ($invoice->payment_status === 'paid') {
            Alert::toast('Pembayaran sudah diselesaikan.', 'warning');
            return redirect()->back()->with('message', 'Pembayaran sudah diselesaikan.');
        }

        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
                ->whereHas('invoice', function ($query) use ($invoice_number) {
                    $query->where('invoice_number', $invoice_number);
                })
                ->with(['user', 'alamat', 'products', 'invoice', 'shipping'])
                ->orderBy('created_at', 'desc')
                ->first();

                $subtotal = $orders->products->sum(function ($product) {
                        return $product->pivot->harga * $product->pivot->quantity;
                });
        return view('frontend.pages.bayar-sekarang', compact('user', 'orders','invoice','subtotal','bank','settings'));
    }

    public function updateStatus(Request $request)
    {
        $order = Order::find($request->order_id);

        if ($order && $order->status === 'pending') {
            $order->status = 'canceled';
            $order->save();
            return response()->json(['message' => 'Order status updated to canceled']);
        }

        return response()->json(['message' => 'Order not found or already updated'], 404);
    }

    public function processpayment(Request $request)
    {
        // dd($request);
        if (is_null($request->alamat_id) || $request->alamat_id == '') {
            Alert::toast('Tambahkan alamat terlebih dahulu!!', 'warning');
            return redirect()->route('profile.address')->with('error', 'Tambahkan alamat terlebih dahulu!!');
        }

        if (is_null($request->total_amount) || $request->total_amount == '') {
            Alert::toast('Tunggu sampai ongkir muncul', 'warning');
            return redirect()->route('cart.index')->with('error', 'Alamat tidak ada');
        }

        $userId = Auth::id();
        $total_amount = $request->total_amount;
        $alamatId = $request->alamat_id;
        $subtotal = $request->subtotal;
        $shippingCost = $request->shipping_cost;
        $shippingService = $request->shipping_courier;
        $estimated_days = $request->estimated_days;
        $discount_chekout = $request->discount_value;
        
        $order = Order::create([
            'user_id' => $userId,
            'order_number' => 'ORD' . strtoupper(uniqid()),
            'total_amount' => $total_amount,
            'status' => 'pending',
            'discount_chekout' => $discount_chekout,
            'payment_method' => 'transfer',
            'alamat_id' => $alamatId
        ]);

        if (!empty($discount_chekout)) {
            $couponCode = $request->coupon_code; 
            $coupon = Coupons::where('coupons_code', $couponCode)->first();
        
            if ($coupon) {
                $coupon->limits = $coupon->limits - 1;
                $coupon->save();
            }
        }

        foreach ($request->products as $product) {
            $productId = $product['id'];
            $quantity = $product['quantity'];
            $sizeId = $product['sizeid'];
            $harga = $product['harga'];
            $discount = $product['discount'];


            $productItem = Product::find($productId);

            $order->products()->attach($productId, [
                'quantity' => $quantity,
                'size_id' => $sizeId,
                'harga' => $harga,
                'discount' => $discount
            ]);

            $productSize = ProductSize::where('product_id', $productId)->where('id', $sizeId)->first();
            if ($productSize) {
                $productSize->stock -= $quantity;
                $productSize->save();
            }
        }

            $shipping = Shipping::create([
                'shipping_service' => $shippingService,
                'shipping_cost' => $shippingCost,
                'estimated_delivery' => $estimated_days,
                'status' => 'pending',
            ]);

            $invoice = $order->invoice()->create([
                'invoice_number' => 'INV' . strtoupper(uniqid()),
                'amount' => $total_amount,
                'invoice_date' => now(),
                'payment_status' => 'unpaid',
            ]);

            if ($shipping) {
                $order->shipping_id = $shipping->id;
                $order->save();
            } else {
                return back()->with('error', 'Shipping creation failed.');
            }

            $user = Auth::user();
            $cart = Auth::user()->cart;
            if ($cart) {
                $purchasedProductIds = collect($request->products)->pluck('id')->toArray();
                $cart->items()->whereIn('product_id', $purchasedProductIds)->delete();
            }
            
            $invoice_number = $invoice->invoice_number;

            return redirect()->route('payment', ['invoice_number' => $invoice_number])
            ->with(compact('user', 'order', 'shipping', 'subtotal'));
        }

    public function pembayaran(Request $request, $invoice_number)
    {
        $invoice = Invoice::where('invoice_number', $invoice_number)->firstOrFail();

        if ($invoice->payment_status === 'paid') {
            return redirect()->back()->with('message', 'Pembayaran sudah diselesaikan.');
        }

        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
                    ->with(['user', 'alamat', 'products', 'invoice', 'shipping'])
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

        $request->validate([
            'payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'payment.required' => 'Mohon isi bukti pembayaran.',
            'payment.image' => 'File yang diunggah harus berupa gambar.',
            'payment.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
        ]);

        if($request->hasFile('payment')) {
            $payment = $request->file('payment')->store('payment_image', 'public');

            $invoice->update([
                'bukti_tf' => $payment,
            ]);
        }

        return redirect()->route('profile.index')->with(['user' => $user, 'orders' => $orders]);
    }


}


