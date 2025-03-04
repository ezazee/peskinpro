<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Province;
use App\Models\Order;
use App\Models\City;
use App\Models\Alamat;
use App\Models\Settings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;



class ProfileController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
            ->with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        $pendingOrdersCount = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->count();
        $canceledOrdersCount = Order::where('user_id', $user->id)
            ->where('status', 'canceled')
            ->count();
        $totalOrders = Order::where('user_id', $user->id)
            ->count();
        return view('frontend.pages.profile.profile', compact('user', 'orders', 'pendingOrdersCount', 'canceledOrdersCount', 'totalOrders', 'settings'));
    }

    public function address()
    {
        $settings = Settings::all();
        $user = Auth::user()->load('role', 'alamat', 'cart');
        // dd($user);
        $provinces = Province::pluck('name', 'province_id');
        return view('frontend.pages.profile.addres', compact('user', 'provinces', 'settings'));
    }

    public function add_address(Request $request)
    {
        $settings = Settings::all();
        $user = Auth::user();

        if ($user->alamat()->count() >= 5) {
            return back()->with('error', 'You can only have up to 5 addresses.');
        }

        $isDefault = $user->alamat()->count() === 0 ? 'yes' : null;

        if ($request->has('default') && $request->default === 'yes') {
            $user->alamat()->update(['default' => null]);
            $isDefault = 'yes';
        }

        $alamat = Alamat::create([
            'user_id' => $user->id,
            'penerima' => $request->penerima,
            'label' => $request->label,
            'province_id' => $request->province,
            'city_id' => $request->city_destination,
            'street' => $request->street,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'no_telp' => $request->no_telp,
            'postal_code' => $request->postalcode,
            'default' => $isDefault,
        ]);
        return back()->with('success', 'Alamat created successfully!');
    }


    public function setDefaultAddress($id)
    {
        $settings = Settings::all();
        $user = Auth::user();

        Alamat::where('user_id', $user->id)->update(['default' => null]);

        $address = Alamat::where('user_id', $user->id)->where('id', $id)->first();
        if ($address) {
            $address->default = 'yes';
            $address->save();
        }

        Alert::toast('Alamat Default Berhasil Diubah!!', 'success');
        return response()->json(['success' => true]);
    }

    public function delete_address($id)
    {
        $alamat = Alamat::findOrFail($id);
        $alamat->delete();
        Alert::toast('Alamat Berhasil Dihapus!!', 'success');
        return back()->with('success', 'Alamat deleted successfully!');
    }

    public function recent_order(Request $request)
    {
        $settings = Settings::all();
        $user = Auth::user();
            $orders = Order::where('user_id', $user->id)
            ->with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

            $tabs = [
                'all' => 'All',
                'pending' => 'Pending',
                'shipping' => 'Delivery',
                'completed' => 'Completed',
                'canceled' => 'Canceled',
            ];

            $activeTab = $request->get('tab', 'all');

            if ($activeTab !== 'all') {
                $orders = Order::with('products')
                    ->where('status', $activeTab)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            } else {
                $orders = Order::with('products')
                    ->orderBy('created_at', 'desc') 
                    ->paginate(10);
            }
        return view('frontend.pages.profile.recent-order', compact('user', 'orders', 'activeTab','tabs', 'settings'));
    }

    public function detail_order($order_number) {
        $settings = Settings::all();
        $user = Auth::user();
        $orders = Order::with(['user', 'alamat', 'products', 'invoice','shipping','returns','refunds'])
        ->where('order_number', $order_number)
        ->firstOrFail();
        if ($orders->status === 'canceled') {
            return back()->with('error', 'Order ini telah dibatalkan.');
        }

        $activeTab = 'all';
        return view('frontend.pages.detail-order', compact('user', 'orders', 'activeTab', 'settings'));
    }


    public function update(Request $request, $id)
    {
        $settings = Settings::all();
        $users = User::findOrFail($id);

        $request->validate([
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'images.image' => 'File yang diunggah harus berupa gambar.',
            'images.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau gif.',
        ]);


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

    public function editaddress($id)
    {
        $settings = Settings::all();
        $user = Auth::user();
        $alamat = Alamat::where('id', $id)->firstOrFail();
        $provinces = Province::all();
        $cities = City::where('province_id', $alamat->province_id)->get();
        return view('frontend.pages.profile.edit-address', compact('user', 'alamat', 'provinces', 'cities', 'settings'));
    }


    public function updateAddress(Request $request, $id)
    {
        $settings = Settings::all();
        $alamat = Alamat::findOrFail($id);

        $alamat->update([
            'penerima' => $request->penerima,
            'label' => $request->label,
            'province_id' => $request->province,
            'city_id' => $request->city_destination,
            'street' => $request->street,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'postal_code' => $request->postal_code,
            'no_telp' => $request->no_telp,
        ]);
        Alert::toast('Update Alamat Berhasil!!', 'success');
        return redirect()->back()->with('success', 'Alamat berhasil diperbarui.');
    }


    public function Orderselesai(Order $order)
    {
        $order->update([
            'status' => 'completed',
        ]);
    
        Alert::success('Terimakasih', 'Pesanan Telah Di Selesaikan!');
        return redirect()->back()->with('success', 'Order and payment status updated successfully.');
    }

    public function OrderBatal(Order $order)
    {    
        $order->update([
            'status' => 'canceled',
        ]);
    
        Alert::info('Terimakasih', 'Pesanan Telah Dibatalkan!');
        return redirect()->route('recent_order')->with('success', 'Pesanan berhasil diperbarui.');
    }
    
}
