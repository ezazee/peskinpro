<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $welcomeMessage = 'Invoice'; 
        return view('backend.pages.invoice.list',compact('welcomeMessage'));
    }


    public function detail(){
        return view('backend.pages.invoice.detail');
    }
}
