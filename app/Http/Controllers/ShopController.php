<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(){
        $products = Product::paginate(9);
        return view('frontend.pages.shop',compact('products'));
    }

    public function detail($slug){
        $products = Product::with(['category', 'imagedetail','sizes'])->where('slug', $slug)->firstOrFail();
        $produkserupa = Product::with(['category', 'imagedetail'])
        ->where('category_id', $products->category_id)
        ->where('slug', '!=', $slug)
        ->take(4) 
        ->get();
        // dd($products);
        return view('frontend.pages.detail',compact('products','produkserupa'));
    }
}
