<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('frontend.pages.profile.profile',compact('user'));
    }

    public function address(){
        $user = Auth::user();
        return view('frontend.pages.profile.addres',compact('user'));

    }

    public function update(Request $request, $id){
        $users = User::findOrFail($id);

        if ($request->hasFile('images')) {
            $directory = 'profile';
            
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
    
            if ($users->images && Storage::exists($users->images)) {
                Storage::delete($users->images);
            }
    
            $imagePath = $request->file('images')->store($directory, 'public');
        } else {
            $imagePath = $users->images;
        }

        $fullName = $request->input('first_name') . ' ' . $request->input('last_name');
        $newSlug = Str::slug($fullName);
    
        $users->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'name' => $fullName,
            'no_telp' => $request->input('no_telp'),
            'images' => $imagePath,
        ]);
        return back()->with('success', 'Users updated successfully!');
    }
}
