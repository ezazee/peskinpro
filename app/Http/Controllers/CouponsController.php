<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Coupons;
use App\Models\City;
use RealRashid\SweetAlert\Facades\Alert;


class CouponsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'Coupons List';
        $coupons = Coupons::paginate(10);
        return view('backend.pages.coupons.list',compact('welcomeMessage','user','coupons'));
    }

    public function create(){
        $user = Auth::user();
        $welcomeMessage = 'Add Coupons';
        $categories = Category::all();
        $cities = City::select('name')
            ->distinct()
            ->orderBy('name')
            ->pluck('name');
        return view('backend.pages.coupons.create',compact('welcomeMessage','user','categories','cities'));
    }

    public function add(Request $request){
        $coupons = Coupons::create([
            'status' => 'active',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'coupons_code' => $request->coupons_code,
            'minimum_purchase' => $request->minimum_purchase,
            'limits' => $request->limits,
            'type'=> $request->type,
            'jumlah' => $request->jumlah,
            'scope' => $request->scope,
            'cities' => $request->scope === 'cities' ? $request->cities : null,
          ]);
        Alert::success('Success', 'Add Post Coupons');
        return back()->with('success', 'Coupons created successfully!');
    }

    public function edit($id){
        $user = Auth::user();
        $welcomeMessage = 'Coupons Article';
        $coupon = Coupons::where('id', $id)->firstOrFail();
        $categories = Category::all();
        $cities = City::select('name')
            ->distinct()
            ->orderBy('name')
            ->pluck('name');

        return view('backend.pages.coupons.edit',compact('welcomeMessage','user','coupon','categories','cities'));
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupons::findOrFail($id);

        $coupon->update([
            'status' => $request->status,
            'coupons_code' => $request->coupons_code,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'minimum_purchase' => $request->minimum_purchase,
            'limits' => $request->limits,
            'type'=> $request->type,
            'jumlah' => $request->jumlah,
            'scope' => $request->scope,
            'cities' => $request->scope === 'cities' ? $request->cities : null,
        ]);
        Alert::success('Success', 'Update Post Coupons');
        return back()->with('success', 'Coupons deleted successfully!');
    }


    public function destroy($id)
    {
        $coupons = Coupons::findOrFail($id); 
        $coupons->delete();
        Alert::error('Deleted', 'Coupons deleted successfully');
        return back()->with('success', 'Coupons deleted successfully!');
    }

}
