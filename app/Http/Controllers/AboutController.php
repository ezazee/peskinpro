<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
    public function ListProducts()
    {
        return view('about.pages.product.index');
    }

    public function TonerProducts()
    {
        return view('about.pages.product.detail.toner');
    }

    public function CleansingProducts()
    {
        return view('about.pages.product.detail.cleansing');
    }

    public function HydroProducts()
    {
        return view('about.pages.product.detail.hydro');
    }

    public function FeminimeProducts()
    {
        return view('about.pages.product.detail.feminime');
    }

    public function PoreExProducts()
    {
        return view('about.pages.product.detail.pore');
    }

    public function SerumProducts()
    {
        return view('about.pages.product.detail.serum');
    }

    public function ToneProducts()
    {
        return view('about.pages.product.detail.tone');
    }

    public function AboutContact()
    {
        return view('about.pages.contact.index');
    }

    public function AboutNews()
    {
        return view('about.pages.news.index');
    }

    public function AboutNewsDetail()
    {
        return view('about.pages.news.detail');
    }
}
