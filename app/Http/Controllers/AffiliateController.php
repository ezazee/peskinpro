<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Settings;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Models\ProductSize;


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

    // backend
    public function CommisionAffiliate(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'Affiliate Commision';

        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');
        $products = Product::with(['sizes', 'category', 'imagedetail'])
        ->when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%") 
              ->orWhereHas('category', function ($q) use ($query) {
                  $q->where('name', 'like', "%{$query}%");
              });
        })
        ->paginate(10);
                return view('backend.pages.affiliate.index',compact('user','welcomeMessage','products'));
    }


    public function bulkUpdateCommission(Request $request)
    {
        if (empty($request->selected_ids)) {
            return redirect()->back()->with('error', 'No products selected.');
        }    
        foreach ($request->selected_ids as $productId) {
            $product = Product::find($productId); 
            
            if ($product) {
                foreach ($product->sizes as $size) {
                    if (isset($request->commission[$size->id])) {
                        $size->update(['commission' => $request->commission[$size->id]]);
                    }
                }
            }
        }

        return redirect()->route('commision.affiliate')->with('success', 'Product created successfully');
    }
    
}
