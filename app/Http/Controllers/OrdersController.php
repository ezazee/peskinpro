<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list(){
        $welcomeMessage = 'Orders'; 
        return view('backend.pages.orders.list',compact('welcomeMessage'));
    }

    public function detail(){
        $welcomeMessage = 'Detail Orders'; 
        return view('backend.pages.orders.detail',compact('welcomeMessage'));
    }
}
