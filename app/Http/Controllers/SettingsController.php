<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class SettingsController extends Controller
{

    public function index(){
        $banners = Banner::all();
        return view('backend.pages.settings.settings',compact('banners'));
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

}
