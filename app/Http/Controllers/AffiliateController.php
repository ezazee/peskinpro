<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Settings;
use RealRashid\SweetAlert\Facades\Alert;

class AffiliateController extends Controller
{
    public function index()
    {    
        $settings = Settings::all();
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
            ->with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        $pendingOrdersCount = Order::where('user_id', $user->id)
            ->where('status', 'pending')
            ->count();
        $canceledOrdersCount = Order::where('user_id', $user->id)
            ->where('status', 'canceled')
            ->count();
        $totalOrders = Order::where('user_id', $user->id)
            ->count();
        return view('frontend.pages.profile.affiliate', compact('user', 'orders', 'pendingOrdersCount', 'canceledOrdersCount', 'totalOrders', 'settings'));
    }
}
