<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Coupons;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        $cartItems = [];

        if (Auth::check()) {
            $cartItems = Auth::user()->cart ? Auth::user()->cart->items()->with(['product', 'productSize'])->get() : [];
        } else {
            $guestCartId = session()->getId();
            $cart = Cart::where('guest_id', $guestCartId)->first();
            $cartItems = $cart ? $cart->items()->with(['product', 'productSize'])->get() : [];
        }
        // dd(Session::get('referral_code')); 
        $cartCollection = collect($cartItems);
        return view('frontend.pages.cart', compact('cartCollection','settings'));

    }
    
    public function add(Request $request)
    {    
        $referralCode = Session::get('referral_code');
        $referrer = User::where('referral_code', $referralCode)->first();

        $product = Product::findOrFail($request->product_id);
        $productSizeId = $request->selected_size;
    
        if (Auth::check()) {
            $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
            $cartItem = CartItem::where('cart_id', $cart->id)
                                ->where('product_size_id', $request->selected_size)
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

            if ($referrer) {
                session(['referral_code' => $referrer->referral_code]);
            }
        } else {
            $guestCartId = session()->getId();
            $cart = Cart::firstOrCreate(['guest_id' => $guestCartId]);
    
            $cartItem = CartItem::where('cart_id', $cart->id)
                                ->where('product_size_id', $request->selected_size)
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
        }
        Alert::toast('Produk ditambahkan ke troli.', 'success');
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    
    public function remove(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        if (Auth::check()) {
            $cart = Auth::user()->cart;

            if ($cart) {
                $cartItem = CartItem::where('cart_id', $cart->id)
                                    ->where('product_id', $product->id)
                                    ->first();

                if ($cartItem) {
                    $cartItem->delete();
                }
            }

        } else {
            $guestCartId = session()->getId();
            $cart = Cart::where('guest_id', $guestCartId)->first();

            if ($cart) {
                $cartItem = CartItem::where('cart_id', $cart->id)
                                    ->where('product_id', $product->id)
                                    ->first();

                if ($cartItem) {
                    $cartItem->delete();
                }
            }
        }
        Alert::toast('Produk dikeluarkan dari troli.', 'info');
        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }


    public function increaseQuantity(Request $request)
    {
        $cartItem = CartItem::find($request->cart_item_id);

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();

            return response()->json([
                'status' => 'success',
                'quantity' => $cartItem->quantity
            ]);
        }

        return response()->json(['status' => 'error'], 404);
    }

    public function decreaseQuantity(Request $request)
    {
        $cartItem = CartItem::find($request->cart_item_id);

        if ($cartItem && $cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();

            return response()->json([
                'status' => 'success',
                'quantity' => $cartItem->quantity
            ]);
        }

        return response()->json(['status' => 'error'], 404);
    }


public function applyManual(Request $request)
{
    try {
        \Log::info('🟡 Coupon apply request:', $request->all());

        $request->validate([
            'coupon_code' => 'required|string',
            'cart_total' => 'required|numeric',
        ]);

        $coupon = Coupons::where('coupons_code', $request->coupon_code)->first();

        if (!$coupon) {
            return response()->json([
                'status' => false,
                'message' => 'Kupon tidak ditemukan.'
            ], 404);
        }

        if (!$coupon->isActive()) {
            return response()->json([
                'status' => false,
                'message' => 'Kupon sudah tidak aktif atau masa berlaku habis.'
            ]);
        }

        if (!$coupon->hasAvailableUses()) {
            return response()->json([
                'status' => false,
                'message' => 'Kupon sudah habis digunakan.'
            ]);
        }

        if ($coupon->isUsed()) {
            return response()->json([
                'status' => false,
                'message' => 'Kupon sudah digunakan.'
            ]);
        }

        if (!$coupon->meetsMinimumPurchase($request->cart_total)) {
            return response()->json([
                'status' => false,
                'message' => 'Belanja tidak memenuhi syarat minimum kupon: Rp' . number_format($coupon->minimum_purchase, 0, ',', '.')
            ]);
        }

        session(['applied_coupon' => $coupon]);

        \Log::info('🟢 Kupon berhasil diterapkan:', [
            'coupon_code' => $coupon->coupons_code,
            'discount' => $coupon->jumlah,
            'type' => $coupon->type,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Voucher berhasil diterapkan.',
            'coupon_id' => $coupon->id,
            'coupon_code' => $coupon->coupons_code,
            'discount' => $coupon->jumlah,
            'type' => $coupon->type,
        ]);
    } catch (\Throwable $e) {
        \Log::error('🔴 Terjadi kesalahan saat menerapkan kupon: ' . $e->getMessage(), [
            'trace' => $e->getTraceAsString()
        ]);

        return response()->json([
            'status' => false,
            'message' => 'Terjadi kesalahan sistem. Silakan coba lagi.'
        ], 500);
    }
}


}
