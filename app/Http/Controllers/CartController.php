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
        if (Auth::check()) {
            $cart = Auth::user()->cart ? Auth::user()->cart->items : [];
        } else {
            $cart = session()->get('cart', []);
        }
    
        dd($cart);
    
        return view('frontend.pages.cart', compact('cart'));
    }

    public function add(Request $request)
{
    $product = Product::findOrFail($request->product_id);

    if (Auth::check()) {
        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
        $cartItem = CartItem::where('cart_id', $cart->id)
                             ->where('product_id', $product->id)
                             ->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }
    } else {
        $guestCartId = session()->getId(); 
        $cart = Cart::firstOrCreate(['guest_id' => $guestCartId]); 

        $cartItem = CartItem::where('cart_id', $cart->id)
                             ->where('product_id', $product->id)
                             ->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->front_image,
            ]);
        }
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Product added to cart successfully!');
}


    public function remove(Request $request)
{
    $request->validate([
        'product_id' => 'required|integer',
    ]);

    if (Auth::check()) {
        $cart = Auth::user()->cart;
        if ($cart) {
            $cartItem = CartItem::where('cart_id', $cart->id)
                                ->where('product_id', $request->product_id)
                                ->first();

            if ($cartItem) {
                $cartItem->delete();
            }
        }
    } else {
        $cart = session()->get('cart', []);
        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]); 
            session()->put('cart', $cart); 
        }
    }

    return redirect()->back()->with('success', 'Product removed from cart successfully!');
}
}
