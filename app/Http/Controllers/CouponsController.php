<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Coupons;



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
        return view('backend.pages.coupons.create',compact('welcomeMessage','user','categories'));
    }

    public function add(Request $request){

        $coupons = Coupons::create([
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'coupons_code' => $request->coupons_code,
            'product' => $request->product,
            'limits' => $request->limits,
            'type'=> $request->type,
            'jumlah' => $request->jumlah
          ]);

        return back()->with('success', 'Coupons created successfully!');
    }

    public function destroy($slug)
    {
        $coupons = Coupons::findOrFail($slug); 
        $coupons->delete();

        return back()->with('success', 'Coupons deleted successfully!');
    }
}
