<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CouponsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'Coupons List'; 
        return view('backend.pages.coupons.list',compact('welcomeMessage','user'));
    }

    public function create(){
        $user = Auth::user();
        $welcomeMessage = 'Add Coupons'; 
        return view('backend.pages.coupons.create',compact('welcomeMessage','user'));
    }
}
