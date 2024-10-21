<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province; 
use App\Models\City;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;


class ChekoutController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        return view('frontend.pages.checkout',compact('provinces'));
    }
}
