<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $welcomeMessage = 'List Users'; 
        return view('backend.pages.users.list',compact('welcomeMessage'));
    }


    public function customers(){
        $welcomeMessage = 'List Customers'; 
        return view('backend.pages.users.customers',compact('welcomeMessage'));
    }
}
