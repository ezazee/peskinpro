<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = [];

        if (Auth::check()) {
            $cartItems = Auth::user()->cart ? Auth::user()->cart->items()->with(['product', 'productSize'])->get() : [];
        } else {
            $guestCartId = session()->getId();
            $cart = Cart::where('guest_id', $guestCartId)->first();
            $cartItems = $cart ? $cart->items()->with(['product', 'productSize'])->get() : [];
        }
            $cartCollection = collect($cartItems);    
        return view('frontend.pages.cart', compact('cartCollection'));
    }
    
    public function add(Request $request)
    {    

        // dd($request);
        $product = Product::findOrFail($request->product_id);
        $productSizeId = $request->selected_size;
    
        if (Auth::check()) {
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
        } else {
            $guestCartId = session()->getId();
            $cart = Cart::firstOrCreate(['guest_id' => $guestCartId]);
    
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
        }
    
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



}
