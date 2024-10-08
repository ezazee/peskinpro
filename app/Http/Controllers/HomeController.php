<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;


class HomeController extends Controller
{
    public function index(){
        $banners = Banner::all();
        $productsfacialcare = Product::whereHas('category', function ($query) {
            $query->where('name', 'Face Care');
        })->take(3)->get();
        $products = Product::orderby('created_at', 'desc')->get();
        // dd($products);
        return view('frontend.index',compact('banners','productsfacialcare','products'));
    }
}
