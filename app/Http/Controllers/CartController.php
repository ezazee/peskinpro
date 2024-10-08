<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart->items ?? [];
        } else {
            $cart = session()->get('cart', []);
        }

        // return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        if (Auth::check()) {
            // Logged-in user: store in DB
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
            // Guest: store in session
            $cart = session()->get('cart', []);

            if (isset($cart[$product->id])) {
                $cart[$product->id]['quantity'] += 1;
            } else {
                $cart[$product->id] = [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->front_image,
                ];
            }

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Update cart item quantity
    public function update(Request $request)
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            $cartItem = $cart->items()->where('product_id', $request->product_id)->first();
            if ($cartItem) {
                $cartItem->quantity = $request->quantity;
                $cartItem->save();
            }
        } else {
            $cart = session()->get('cart', []);
            if (isset($cart[$request->product_id])) {
                $cart[$request->product_id]['quantity'] = $request->quantity;
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

    // Remove item from cart
    public function remove(Request $request)
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            $cart->items()->where('product_id', $request->product_id)->delete();
        } else {
            $cart = session()->get('cart', []);
            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // Merge session cart to the database on login
    public function mergeCart()
    {
        if (Auth::check()) {
            $cart = session()->get('cart', []);
            $userCart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);

            foreach ($cart as $productId => $details) {
                $cartItem = $userCart->items()->where('product_id', $productId)->first();
                if ($cartItem) {
                    $cartItem->quantity += $details['quantity'];
                    $cartItem->save();
                } else {
                    $userCart->items()->create([
                        'product_id' => $productId,
                        'quantity' => $details['quantity'],
                    ]);
                }
            }

            session()->forget('cart'); // Clear session cart after merge
        }
    }
}
