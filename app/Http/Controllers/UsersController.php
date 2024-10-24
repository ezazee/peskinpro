<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function index(){
        $welcomeMessage = 'List Users';
        $users = User::whereDoesntHave('role', function($query) {
            $query->where('name', 'user');
        })->paginate(5);
        return view('backend.pages.users.list',compact('welcomeMessage','users'));
    }

    public function create(){
        $welcomeMessage = 'Create Users';
        $roles = Role::all();
        return view('backend.pages.users.create',compact('welcomeMessage','roles'));
    }

    public function add_admin(Request $request){
        // dd($request);
        $imagePath = null;
        if ($request->hasFile('images')) {
            $directory = 'profile';
            
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
    
            $imagePath = $request->file('images')->store($directory, 'public'); 
        } else {
            $imagePath = 'images/profile.png';
        }

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name . ' ' . $request->last_name,
            'slug' => Str::slug($request->first_name . $request->last_name),
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => bcrypt($request->password), 
            'role_id' => $request->role_id,
            'status' => $request->status,
            'images' => $imagePath,
        ]);

        return redirect()->route('users.index')->with('success', 'Users berhasil ditambahkan!');
    }

    public function edit_admin($slug){
        $welcomeMessage = 'Edit Users'; 
        $users = User::where('slug', $slug)->firstOrFail();
        $roles = Role::all();
        return view('backend.pages.users.edit', compact('users','welcomeMessage','roles'));
    }

    public function update_admin(Request $request, $id){

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
            'slug' => $newSlug,
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'role_id' => $request->input('role_id'),
            'status' => $request->input('status'),
            'images' => $imagePath,
        ]);
    
        return redirect()->route('users.index')->with('success', 'Users updated successfully.');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id); 
        $users->delete();
        return redirect()->route('users.index')->with('success', 'Users deleted successfully.');
    }

    public function customers(){
        $welcomeMessage = 'List Customers'; 
        return view('backend.pages.users.customers',compact('welcomeMessage'));
    }
}
