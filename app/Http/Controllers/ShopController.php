<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;


class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        
        $productspromo = Product::whereHas('sizes', function ($query) {
            $query->where('promotion', 'yes');
        })->get();

        $productbestseller = Product::whereHas('sizes', function ($query) {
            $query->where('bestseller', 'yes');
        })->get();
        
        $articles = Article::with('tag')
        ->where('status', 'public')
        ->orderby('id', 'desc')
        ->take(3)
        ->get();
        return view('frontend.pages.shop',compact('products','articles','productspromo','productbestseller'));
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
