<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{

    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'Settings'; 
        $banners = Banner::all();
        $products = Product::with('sizes', 'category')->get();
        $expandedProducts = $products->flatMap(function ($product) {
            return $product->sizes->map(function ($size) use ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'images' => $product->front_image,
                    'category' => $product->category,
                    'size' => $size,
                ];
            });
        });

        $popupImages = Settings::pluck('id','popup_image');
        $setting = Settings::all();

        // dd($setting);
        return view('backend.pages.settings.settings',compact('banners','welcomeMessage','user','expandedProducts','popupImages','setting'));
    }

    public function banner(Request $request){

        $request->validate([
            'banner_desktop' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_mobile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $desktopImagePath = null;
        $mobileImagePath = null;
    
        if ($request->hasFile('banner_desktop')) {
            $desktopImage = $request->file('banner_desktop');
            $desktopImageName = time() . '_desktop.' . $desktopImage->getClientOriginalExtension();
            $desktopImage->move(public_path('uploads/banners'), $desktopImageName);
    
            $desktopImagePath = 'uploads/banners/' . $desktopImageName;
        }
    
        if ($request->hasFile('banner_mobile')) {
            $mobileImage = $request->file('banner_mobile');
            $mobileImageName = time() . '_mobile.' . $mobileImage->getClientOriginalExtension();
            $mobileImage->move(public_path('uploads/banners'), $mobileImageName);
    
            $mobileImagePath = 'uploads/banners/' . $mobileImageName;
        }
    
        if ($desktopImagePath && $mobileImagePath) {
            Banner::create([
                'banner_desktop' => $desktopImagePath,
                'banner_mobile' => $mobileImagePath,
            ]);
    
            return back()->with('success', 'Images uploaded successfully.');
        }
    
        return back()->withErrors('Please upload valid images for both desktop and mobile.');
    }

    public function deletebanner($id){
        $category = Banner::findOrFail($id); 
        $category->delete();
        return redirect()->route('settings.index')->with('success', 'Banner deleted successfully.');
    }

    public function updateBestseller($id)
    {
        $item = ProductSize::findOrFail($id);
        $item->bestseller = $item->bestseller === 'yes' ? 'no' : 'yes';
        $item->save();

        return redirect()->back()->with('success', 'Bestseller status updated successfully.');
    }

    public function updatePromotion($id)
    {
        $item = ProductSize::findOrFail($id);
        $item->promotion = $item->promotion === 'yes' ? 'no' : 'yes';
        $item->save();

        return redirect()->back()->with('success', 'Promotion status updated successfully.');
    }
    
    public function add_popup(Request $request){
        $request->validate([
            'popup_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $popup_image = $request->file('popup_image')->store('uploads/banners', 'public');
        $settings = Settings::first(); 
    
        if ($settings) {
            $settings->update([
                'popup_image' => $popup_image,
            ]);
        } else {
            Settings::create([
                'popup_image' => $popup_image,
            ]);
        }
    
        return back()->with('success', 'Popup image saved successfully!');
    }

    public function delete_popup(){
    
        Settings::query()->update([
            'popup_image' => null,
        ]);

        return back()->with('success', 'Popup image saved successfully!');
    }


    public function bannerbundle(Request $request){
        $request->validate([
            'banner_bundle_head' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_bundle_one' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_bundle_two' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_bundle_tree' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $settings = Settings::first();
        
        $banner_bundle_head = $settings ? $settings->banner_bundle_head : null;
        $banner_bundle_one = $settings ? $settings->banner_bundle_one : null;
        $banner_bundle_two = $settings ? $settings->banner_bundle_two : null;
        $banner_bundle_tree = $settings ? $settings->banner_bundle_tree : null;
        
        if ($request->hasFile('banner_bundle_head')) {
            $banner_bundle_head = $request->file('banner_bundle_head')->store('uploads/banners', 'public');
        }
        
        if ($request->hasFile('banner_bundle_one')) {
            $banner_bundle_one = $request->file('banner_bundle_one')->store('uploads/banners', 'public');
        }
        
        if ($request->hasFile('banner_bundle_two')) {
            $banner_bundle_two = $request->file('banner_bundle_two')->store('uploads/banners', 'public');
        }
        
        if ($request->hasFile('banner_bundle_tree')) {
            $banner_bundle_tree = $request->file('banner_bundle_tree')->store('uploads/banners', 'public');
        }
        
        if ($settings) {
            $settings->update([
                'banner_bundle_head' => $banner_bundle_head,
                'banner_bundle_one' => $banner_bundle_one,
                'banner_bundle_two' => $banner_bundle_two,
                'banner_bundle_tree' => $banner_bundle_tree,
            ]);
        } else {
            Settings::create([
                'banner_bundle_head' => $banner_bundle_head,
                'banner_bundle_one' => $banner_bundle_one,
                'banner_bundle_two' => $banner_bundle_two,
                'banner_bundle_tree' => $banner_bundle_tree,
            ]);
        }        

        return back()->with('success', 'image saved successfully!');
    }

    public function bannerknowlage(Request $request){
        $request->validate([
            'knowlage_home' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'knowlage_shop' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $settings = Settings::first();
        
        $knowlage_home = $settings ? $settings->knowlage_home : null;
        $knowlage_shop = $settings ? $settings->knowlage_shop : null;
        
        if ($request->hasFile('knowlage_home')) {
            $knowlage_home = $request->file('knowlage_home')->store('uploads/banners', 'public');
        }
        
        if ($request->hasFile('knowlage_shop')) {
            $knowlage_shop = $request->file('knowlage_shop')->store('uploads/banners', 'public');
        }
        if ($settings) {
            $settings->update([
                'knowlage_home' => $knowlage_home,
                'knowlage_shop' => $knowlage_shop,
            ]);
        } else {
            Settings::create([
                'knowlage_home' => $knowlage_home,
                'knowlage_shop' => $knowlage_shop,
            ]);
        }        

        return back()->with('success', 'image saved successfully!');
    }

    public function bannershop(Request $request){
        $request->validate([
            'bannershop_head_one' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bannershop_head_two' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_produk_terlaris' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $settings = Settings::first();
        
        $bannershop_head_one = $settings ? $settings->bannershop_head_one : null;
        $bannershop_head_two = $settings ? $settings->bannershop_head_two : null;
        $banner_produk_terlaris = $settings ? $settings->bannershop_head_two : null;

        
        if ($request->hasFile('bannershop_head_one')) {
            $bannershop_head_one = $request->file('bannershop_head_one')->store('uploads/banners', 'public');
        }
        
        if ($request->hasFile('bannershop_head_two')) {
            $bannershop_head_two = $request->file('bannershop_head_two')->store('uploads/banners', 'public');
        }
        if ($request->hasFile('banner_produk_terlaris')) {
            $banner_produk_terlaris = $request->file('banner_produk_terlaris')->store('uploads/banners', 'public');
        }

        if ($settings) {
            $settings->update([
                'bannershop_head_one' => $bannershop_head_one,
                'bannershop_head_two' => $bannershop_head_two,
                'banner_produk_terlaris' => $banner_produk_terlaris,
            ]);
        } else {
            Settings::create([
                'bannershop_head_one' => $bannershop_head_one,
                'bannershop_head_two' => $bannershop_head_two,
                'banner_produk_terlaris' => $banner_produk_terlaris,
            ]);
        }        

        return back()->with('success', 'image saved successfully!');
    }

    public function bannerflashsale(Request $request){
        $request->validate([
            'bg_flashsale' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_flashsale_home' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $settings = Settings::first();
    
        $bg_flashsale = $settings ? $settings->bg_flashsale : null;
        $banner_flashsale_home = $settings ? $settings->banner_flashsale_home : null;
        $timer_flashsale = $settings ? $settings->timer_flashsale : null;
    
        if ($request->hasFile('bg_flashsale')) {
            $bg_flashsale = $request->file('bg_flashsale')->store('uploads/banners', 'public');
        }
    
        if ($request->hasFile('banner_flashsale_home')) {
            $banner_flashsale_home = $request->file('banner_flashsale_home')->store('uploads/banners', 'public');
        }
    
        if ($request->has('timer_flashsale')) {
            $timer_flashsale = $request->input('timer_flashsale');
        }
    
        if ($settings) {
            $settings->update([
                'bg_flashsale' => $bg_flashsale,
                'banner_flashsale_home' => $banner_flashsale_home,
            ]);
        } else {
            Settings::create([
                'bg_flashsale' => $bg_flashsale,
                'banner_flashsale_home' => $banner_flashsale_home,
            ]);
        }
    
        return back()->with('success', 'Image saved successfully!');
    }

    public function timerflashsale(Request $request){
        $settings = Settings::first();
        $timer_flashsale = $settings ? $settings->timer_flashsale : null;
        $timer_flashsale = $request->input('timer_flashsale');

        if ($settings) {
            $settings->update([
                'timer_flashsale' => $timer_flashsale
            ]);
        } else {
            Settings::create([
                'timer_flashsale' => $timer_flashsale
            ]);
        }

        return back()->with('success', 'timer saved successfully!');
    }

    
}
