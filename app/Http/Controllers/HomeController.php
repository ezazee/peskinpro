<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Article;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        if (Auth::check() && in_array(auth()->user()->role->name, ['Affiliate'])) {
            return redirect()->route('affiliate.index');
        }

        $banners = Banner::all();
        $productsfacialcare = Product::whereHas('category', function ($query) {
            $query->where('name', 'Facial Care');
        })->with(['category', 'sizes'])
        ->get();

        $articles = Article::with('tag')
        ->where('status', 'public')
        ->orderby('id', 'desc')
        ->take(3)
        ->get();
        $settings = Settings::all();
        $timerFlashsale = Settings::first()->timer_flashsale ?? '';

        $products = Product::with('category','sizes')->orderby('created_at', 'desc')->get();
        $expandedPromo = $products->flatMap(function ($product) {
            return $product->sizes->filter(function ($size) {
                return $size->promotion === 'yes';
            })->map(function ($size) use ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'slug' => $product->slug,
                    'front_image' => $product->front_image,
                    'back_image' => $product->back_image,
                    'category' => $product->category,
                    'size' => $size,
                ];
            });
        });
        return view('frontend.index',compact('banners','productsfacialcare','products','articles','settings','timerFlashsale','expandedPromo'));
    }

    public function returnrefund(){
        $settings = Settings::all();
        return view('frontend.pages.return-and-refunds',compact('settings'));
    }
    public function ketentuanPengguna(){
        $settings = Settings::all();
        return view('frontend.pages.syarat-ketentuan',compact('settings'));
    }
}
