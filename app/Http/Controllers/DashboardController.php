<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        $totalproduct = Product::count();
        // dd($totalproduct);
        return view('backend.dashboard',compact('user','orders','totalproduct'));
    }

}
