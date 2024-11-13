<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\ProductSize;
use RealRashid\SweetAlert\Facades\Alert;

class OrdersController extends Controller
{
    public function list(){
        $user = Auth::user();
        $welcomeMessage = 'Orders';
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
        ->join('invoices', 'orders.id', '=', 'invoices.order_id') 
        ->orderByRaw('CASE WHEN invoices.bukti_tf IS NOT NULL THEN 0 ELSE 1 END') 
        ->orderBy('orders.created_at', 'desc') 
        ->paginate(10);

        $paymentrefund = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->whereHas('invoice', function ($query) {
            $query->where('payment_status', 'refunded');
        })
        ->count();

        $ordercancel =  Order::where('status','canceled')->count();
        return view('backend.pages.orders.list',compact('welcomeMessage','user','orders','paymentrefund','ordercancel'));
    }

    public function detail($orderNumber){
        $orders = Order::with(['user', 'alamat', 'products', 'invoice','shipping'])
        ->where('order_number', $orderNumber)
        ->firstOrFail();
        $user = Auth::user();
        $welcomeMessage = 'Detail Orders'; 
        return view('backend.pages.orders.detail',compact('welcomeMessage','user','orders'));
    }

    public function pos(){
        $orders = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->whereHas('user', function ($query) {
            $query->where('role_id', 1);
        })
        ->paginate(10);
        $user = Auth::user();
        $welcomeMessage = 'Point Of Sale';
        $products = Product::with('sizes', 'category')->get();
        $cartItems = Auth::user()->cart ? Auth::user()->cart->items()->with(['product', 'productSize'])->get() : [];

        $expandedProducts = $products->flatMap(function ($product) {
            return $product->sizes->map(function ($size) use ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'images' => $product->front_image,
                    'category' => $product->category,
                    'size' => $size,
                ];
            });
        });
        $countcart = count($cartItems);
        return view('backend.pages.orders.pos',compact('welcomeMessage','user','expandedProducts','cartItems','countcart','orders'));
    }


    public function add_cart_pos(Request $request)
    {    
        $product = Product::findOrFail($request->product_id);
        $productSizeId = $request->product_size_id;
    
        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
        $cartItem = CartItem::where('cart_id', $cart->id)
                            ->where('product_size_id', $request->product_size_id)
                            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id, 
                'product_size_id' => $productSizeId, 
                'quantity' => $request->quantity,
            ]);
        }
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = CartItem::find($id);

        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang.');
        }

        return redirect()->back()->with('error', 'Item tidak ditemukan.');
    }

    public function clearall()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'All items have been removed from your cart.');
    }


    public function pos_order(Request $request){

        $userId = Auth::id();
        $total_amount = $request->total_amount;
        $paymentMethod = $request->payment_method;

        if (empty($request->products) || count($request->products) === 0) {
            Alert::warning('Note', 'Please select the product first!');
            return redirect()->back()->with('error', 'Mohon pilih produk terlebih dahulu.');
        }        

        $order = Order::create([
            'user_id' => $userId,
            'order_number' => 'ORD' . strtoupper(uniqid()),
            'total_amount' => $total_amount,
            'status' => 'completed',
            'payment_method' => $paymentMethod,
        ]);

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

        $invoice = $order->invoice()->create([
            'invoice_number' => 'INV' . strtoupper(uniqid()),
            'amount' => $total_amount,
            'invoice_date' => now(),
            'payment_status' => 'paid',
        ]);

        $order->save();
    
        $cart = Auth::user()->cart;
        if ($cart) {
            $cart->items()->delete();
        }
        Alert::success('Success', 'Orders successfully!');
        return redirect()->back()->with('success', 'Orders Success.');    
    }
}
