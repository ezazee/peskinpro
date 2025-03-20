<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\CartItem;
use RealRashid\SweetAlert\Facades\Alert;


class AuthenticationController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        $settings = Settings::all();

        return view('frontend.pages.auth.login', compact('settings'));
    }

    public function show_register(){
        $settings = Settings::all();
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('frontend.pages.auth.regist',compact('settings'));
    }

    public function showadminLogin(){

        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }

        return view('backend.pages.auth.login');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan. Silahkan Register terlebih dahulu.'])->withInput();
        }

        if ($user->status === 'blocked') {
            Alert::error('Akun Diblokir', 'Akun Anda telah diblokir. Silahkan hubungi admin.');
            return back()->withInput();
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $guestCartId = session()->getId();
            $guestCart = Cart::where('guest_id', $guestCartId)->first();

            if ($guestCart) {
                $userCart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);

                foreach ($guestCart->items as $guestCartItem) {
                    $existingItem = $userCart->items()
                        ->where('product_size_id', $guestCartItem->product_size_id)
                        ->first();

                    if ($existingItem) {
                        $existingItem->quantity += $guestCartItem->quantity;
                        $existingItem->save();
                    } else {
                        $userCart->items()->create([
                            'product_id' => $guestCartItem->product_id,
                            'product_size_id' => $guestCartItem->product_size_id,
                            'quantity' => $guestCartItem->quantity,
                        ]);
                    }
                }

                $guestCart->delete();
            }

            if ($user->role->name === 'user') {
                Alert::toast('Login Berhasil.', 'success');
                return redirect()->route('home.index');
            } elseif ($user->role->name === 'Administrator') {
                Alert::toast('Login Berhasil.', 'success');
                return redirect()->route('dashboard.index');
            }elseif ($user->role->name === 'Affiliate') {
                Alert::toast('Login Berhasil.', 'success');
                return redirect()->route('affiliate.index');
            }
        }

        return back()->withErrors(['password' => 'Password salah.'])->withInput();
    }


    public function affiliateRegister(){
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        $settings = Settings::all();

        return view('frontend.pages.auth.affiliateRegist', compact('settings'));
    }



    public function register(Request $request){
        $messages = [
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus terdiri dari minimal :min karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'term.accepted' => 'Anda harus menyetujui syarat dan ketentuan.',
            'email.unique' => 'Email telah digunakan. Coba memakai email lain.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'term' => 'accepted',
        ],$messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name . ' ' . $request->last_name,
            'slug' => Str::slug($request->first_name . $request->last_name),
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'status' => 'active',
            'images' => '',
            'role_id' => 3,
            'password' => bcrypt($request->password),
        ]);
        Alert::toast('Register Berhasil Silahkan Login.', 'success');
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Alert::toast('Anda Logout.', 'info');
        return redirect()->route('home.index');
    }


    public function registerAffiliate(Request $request){
        $messages = [
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus terdiri dari minimal :min karakter.',
            'email.unique' => 'Email telah digunakan. Coba memakai email lain.',
            'uploadImage.required' => 'Gambar KTP wajib diupload.',
            'uploadImage.image' => 'File harus berupa gambar.',
            'uploadImage.mimes' => 'Format gambar harus jpg, png, atau jpeg.',
            'uploadImage.max' => 'Ukuran gambar maksimal 2MB.',
        ];
    
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'uploadImage' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('uploadImage')) {
            $image = $request->file('uploadImage');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('ktp', $imageName, 'public');
        } else {
            $imagePath = null;
        }

        $dataSosmed = [
            'instagram' => $request->sosmedInstagram,
            'youtube' => $request->sosmedYoutube,
            'twitter' => $request->sosmedX,
            'tiktok' => $request->sosmedTiktok,
            'facebook' => $request->sosmedFacebook,
            'blog' => $request->sosmmedBlog,
            'lainnya' => $request->sosmedLainnya,
        ];
    
        if (empty(array_filter($dataSosmed))) {
            return response()->json(['message' => 'Minimal satu sosial media harus diisi!'], 400);
        }

        $user = User::create([
            'referral_code' => strtoupper(Str::random(8)),
            'name' => $request->namaLengkap,
            'slug' => Str::slug($request->namaLengkap),
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_rek' => $request->nomorRekening,
            'no_telp' => $request->nomorWhatsapp,
            'nik' => $request->nomorKTP,
            'ktp' => $imagePath,
            'data_sosmed' => $dataSosmed,
            'status' => 'active',
            'affiliate_alamat' => $request->alamatLengkap,
            'affiliate_status' => 'pending',
            'images' => '',
            'role_id' => 7,
        ]);
        Alert::toast('Register Berhasil Silahkan Login.', 'success');
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
