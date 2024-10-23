<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function index(){
        $welcomeMessage = 'Coupons List'; 
        return view('backend.pages.coupons.list',compact('welcomeMessage'));
    }

    public function create(){
        $welcomeMessage = 'Add Coupons'; 
        return view('backend.pages.coupons.create',compact('welcomeMessage'));
    }
}
