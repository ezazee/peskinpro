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
use Illuminate\Support\Facades\Auth;


class ChekoutController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        return view('frontend.pages.checkout',compact('provinces'));
    }

    public function processCheckout(Request $request)
    { 
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

            $provinces = Province::pluck('name', 'province_id');
            // dd($cartItems);
            return view('frontend.pages.checkout', compact('cartItems', 'provinces'));
        } else {
            return redirect()->back()->with('error', 'Tidak ada item yang dipilih.');
        }
     }


}


