<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function index()
    {
        return view('affiliate.index');
    }

    public function RaihKomisi(){
        return view('affiliate.pages.komisi');
    }

    public function Keuntungan(){
        return view('affiliate.pages.keuntungan');
    }
}
