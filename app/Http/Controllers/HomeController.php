<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Article;


class HomeController extends Controller
{
    public function index(){
        $banners = Banner::all();
        $productsfacialcare = Product::whereHas('category', function ($query) {
            $query->where('name', 'Facial Care');
        })->with(['category', 'sizes'])->take(3)->get();
        
        $articles = Article::with('tag')
        ->where('status', 'public')
        ->orderby('id', 'desc')
        ->take(3)
        ->get();
    
        $products = Product::with('category','sizes')->orderby('created_at', 'desc')->get();
        return view('frontend.index',compact('banners','productsfacialcare','products','articles'));
    }
}
