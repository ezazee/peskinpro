<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
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

        // $productbestseller = Product::withCount(['orders as total_sold' => function ($query) {
        //     $query->select(DB::raw("sum(order_product.quantity)"));
        // }])
        // ->with(['category', 'sizes']) 
        // ->orderByDesc('total_sold') 
        // ->take(3)
        // ->get()
        // ->map(function ($product) {
        //     return [
        //         'id' => $product->id,
        //         'name' => $product->name,
        //         'slug' => $product->slug,
        //         'front_image' => $product->front_image,
        //         'back_image' => $product->back_image,
        //         'total_sold' => $product->total_sold,
        //         'category' => $product->category ? $product->category->name : 'No category',
        //         'sizes' => $product->sizes,
        //     ];
        // });

        $productbestseller = Product::whereIn('id', [4, 2, 3])
        ->with(['category', 'sizes'])
        ->get()
        ->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'front_image' => $product->front_image,
                'back_image' => $product->back_image,
                'total_sold' => $product->orders()->sum('order_product.quantity'), // Menghitung jumlah total_sold
                'category' => $product->category ? $product->category->name : 'No category',
                'sizes' => $product->sizes,
            ];
        });

        
        
        $articles = Article::with('tag')
        ->where('status', 'public')
        ->orderby('id', 'desc')
        ->take(3)
        ->get();
        $settings = Settings::all();
        $timerFlashsale = Settings::first()->timer_flashsale ?? '';
        return view('frontend.pages.shop',compact('products','articles','expandedPromo','productbestseller','settings','timerFlashsale'));
    }

    public function detail($slug,Request $request){
        $settings = Settings::all();
        $products = Product::with(['category', 'imagedetail','sizes'])->where('slug', $slug)->firstOrFail();
        $produkserupa = Product::with(['category', 'imagedetail'])
        ->where('category_id', $products->category_id)
        ->where('slug', '!=', $slug)
        ->take(4) 
        ->get();

        $meta_title = $products->name ?? 'PESkin Pro Indonesia Official';
        $meta_description = Str::limit(strip_tags($products->description), 160);
        $meta_keywords = $products->category->name . ', Skincare, Peskinpro ID';
        $meta_price = $products->sizes->first()->price;

        if ($request->has('ref')) {
            Session::put('referral_code', $request->ref);
        }

        return view('frontend.pages.detail',compact('products','produkserupa','meta_title','meta_description','meta_keywords','meta_price','settings'));
    }
}
