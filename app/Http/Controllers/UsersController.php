<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class UsersController extends Controller
{
    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'List Users';
        $users = User::whereDoesntHave('role', function($query) {
            $query->where('name', 'user');
        })->paginate(5);
        return view('backend.pages.users.list',compact('welcomeMessage','users','user'));
    }

    public function create(){
        $user = Auth::user();
        $welcomeMessage = 'Create Users';
        $roles = Role::all();
        return view('backend.pages.users.create',compact('welcomeMessage','roles','user'));
    }

    public function add_admin(Request $request){
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $imagePath = null;
        if ($request->hasFile('images')) {
            $directory = 'profile';

            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }

            $imagePath = $request->file('images')->store($directory, 'public');
        } else {
            $imagePath = '';
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

        Alert::success('Success', 'Users created successfully!');
        return redirect()->route('users.index')->with('success', 'Users berhasil ditambahkan!');
    }

    public function edit_admin($slug){
        $user = Auth::user();
        $users = User::where('slug', $slug)->firstOrFail();
        if ($users->role->name === 'user') {
            $welcomeMessage = 'Edit Customers';
        }else {
            $welcomeMessage = 'Edit Users';
        }

        $roles = Role::all();
        return view('backend.pages.users.edit', compact('users','welcomeMessage','roles','user'));
    }

    public function update_admin(Request $request, $id)
    {
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

        $updateData = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'name' => $fullName,
            'slug' => $newSlug,
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'role_id' => $request->input('role_id'),
            'status' => $request->input('status'),
            'images' => $imagePath,
        ];

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);
            $updateData['password'] = bcrypt($request->input('password'));
        }

        $users->update($updateData);

        if ($users->role->name === 'user') {
            Alert::info('Updated', 'Users updated successfully');
            return redirect()->route('customers.index')->with('success', 'Users updated successfully.');
        }

        Alert::info('Updated', 'Users updated successfully');
        return redirect()->route('users.index')->with('success', 'Users updated successfully.');
    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        Alert::error('Deleted', 'Users deleted successfully.');
        return redirect()->route('users.index')->with('success', 'Users deleted successfully.');
    }

    public function customers(Request $request){
        $welcomeMessage = 'List Customers';
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');

        $users = User::whereHas('role', function ($q) {
            $q->where('name', 'user');
        })
        ->when($query, function ($q) use ($query) {
            $q->where(function ($subQuery) use ($query) {
                $subQuery->where('name', 'like', "%{$query}%")
                         ->orWhere('email', 'like', "%{$query}%");
            });
        })
        ->with('alamat')
        ->paginate(10);

        $totalcustomers = User::whereHas('role', function($query) {
            $query->where('name', 'user');
        })->count();
        $user = Auth::user();

        return view('backend.pages.users.customers',compact('welcomeMessage','users','totalcustomers','user'));
    }

    public function profile($id){
        $user = User::with('role')->find($id);
        $welcomeMessage = 'Profile ' . $user->name;
        return view('backend.pages.users.profile',compact('welcomeMessage','user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->hasFile('images')) {
            $directory = 'profile';

            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }

            if ($user->images && Storage::exists($user->images)) {
                Storage::delete($user->images);
            }

            $imagePath = $request->file('images')->store($directory, 'public');
        } else {
            $imagePath = $user->images;
        }

        $fullName = $request->input('first_name') . ' ' . $request->input('last_name');
        $newSlug = Str::slug($fullName);

        $updateData = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'name' => $fullName,
            'slug' => $newSlug,
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'images' => $imagePath,
        ];

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);
            $updateData['password'] = bcrypt($request->input('password'));
        }

        $user->update($updateData);

        Alert::info('Info', 'updated successfully');
        return back()->with('success', 'Users updated successfully.');
    }
}
