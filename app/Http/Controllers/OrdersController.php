<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    public function list(){
        $user = Auth::user();
        $welcomeMessage = 'Orders'; 
        return view('backend.pages.orders.list',compact('welcomeMessage','user'));
    }

    public function detail(){
        $user = Auth::user();
        $welcomeMessage = 'Detail Orders'; 
        return view('backend.pages.orders.detail',compact('welcomeMessage','user'));
    }
}
