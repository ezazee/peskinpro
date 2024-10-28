<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InvoiceController extends Controller
{
    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'Invoice'; 
        return view('backend.pages.invoice.list',compact('welcomeMessage','user'));
    }


    public function detail(){
        $user = Auth::user();
        return view('backend.pages.invoice.detail',compact('user'));
    }
}
