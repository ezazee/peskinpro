<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Order;
use Barryvdh\DomPDF\Facade as PDF;



class ReportController extends Controller
{
    public function index(){
        $user = Auth::user();
        $welcomeMessage = 'Report';
        return view('backend.pages.report.index',compact('welcomeMessage','user'));
    }

    public function generate(Request $request)
    {
        $user = Auth::user();
        $welcomeMessage = 'Report';
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $type = $request->input('type');
    
        if ($startDate && $endDate && Carbon::parse($startDate)->gt(Carbon::parse($endDate))) {
            return back()->withErrors(['start_date' => 'Start date must be before end date']);
        }
    
        $data = [];
    
        if ($type === 'stock') {
            $products = Product::with('sizes')->whereBetween('created_at', [$startDate, $endDate])->get();
            
            $data = $products->flatMap(function ($product) {
                return $product->sizes->map(function ($size) use ($product) {
                    $stockAvailable = $size->stock;
                    
                    $stockSold = $product->orders()->whereHas('products', function ($query) use ($size) {
                        $query->where('size_id', $size->id);
                    })
                    ->where('status', 'shipping')
                    ->sum('order_product.quantity');
                    
                    $stockRemaining = $stockAvailable - $stockSold;
                    
                    return [
                        'id' => $product->id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'front_image' => $product->front_image,
                        'back_image' => $product->back_image,
                        'category' => $product->category,
                        'size' => $size,
                        'stock_available' => $stockAvailable,
                        'stock_sold' => $stockSold,
                        'stock_remaining' => $stockRemaining,
                    ];
                });
            });
        
        } elseif ($type === 'order') {
            $query = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping', 'returns', 'refunds'])
                ->whereBetween('created_at', [$startDate, $endDate]);
    
            if ($request->has('status') && $request->status !== 'all' && $request->status !== '') {
                $status = strtolower($request->status); 
                $query->whereRaw('LOWER(status) = ?', [$status]);
            }
    
            $data = $query->get();
        }
    
        $statuses = ['processing', 'completed', 'shipping', 'return', 'refund'];
    
        $totalReturns = $data->filter(function($order) {
            return strtolower($order->status) === 'return';
        })->sum(function($order) {
            return $order->returns->sum('nominal'); 
        });
    
        $totalRefunds = $data->filter(function($order) {
            return strtolower($order->status) === 'refund';
        })->sum(function($order) {
            return $order->refunds->sum('nominal');
        });
    
        $totalAmount = $data->filter(function($order) use ($statuses) {
            return in_array(strtolower($order->status), $statuses);
        })->sum('total_amount');
    
        $adjustedTotal = $totalAmount - $totalReturns - $totalRefunds;
    
        $totalStockSold = $data->sum('stock_sold');
    
        return view('backend.pages.report.index', compact('welcomeMessage','user','data', 'startDate', 'endDate', 'type','totalStockSold','totalAmount','totalReturns','totalRefunds','adjustedTotal'));
    }
    


    public function generatePdf(Request $request)
    {
        $imageUrl = 'https://raw.githubusercontent.com/ezazee/peskinpro/peskin/public/frontend/assets/images/logo/peskin.png';
        
        $ch = curl_init($imageUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $imageData = curl_exec($ch);
        curl_close($ch);
        
        $image = base64_encode($imageData);
    
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $type = $request->type;
    
        if ($type === 'stock') {
            $products = Product::with('sizes')->whereBetween('created_at', [$startDate, $endDate])->get();
            $data = $products->flatMap(function ($product) {
                return $product->sizes->map(function ($size) use ($product) {
                    $stockAvailable = $size->stock;
                    
                    $stockSold = $product->orders()->whereHas('products', function ($query) use ($size) {
                        $query->where('size_id', $size->id);
                    })
                    ->where('status', 'shipping') 
                    ->sum('order_product.quantity');
                    
                    $stockRemaining = $stockAvailable - $stockSold;
                    
                    return [
                        'id' => $product->id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'front_image' => $product->front_image,
                        'back_image' => $product->back_image,
                        'category' => $product->category,
                        'size' => $size,
                        'stock_available' => $stockAvailable,
                        'stock_sold' => $stockSold,
                        'stock_remaining' => $stockRemaining, 
                    ];
                });
            });
        
        }  elseif ($type === 'order') {
            $query = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping', 'returns', 'refunds'])
                ->whereBetween('created_at', [$startDate, $endDate]);
    
            if ($request->has('status') && $request->status !== 'all' && $request->status !== '') {
                $status = strtolower($request->status); 
                $query->whereRaw('LOWER(status) = ?', [$status]);
            }
    
            $data = $query->get();
        }
    
        $statuses = ['processing', 'completed', 'shipping', 'return', 'refund'];
    
        $totalReturns = $data->filter(function($order) {
            return strtolower($order->status) === 'return';
        })->sum(function($order) {
            return $order->returns->sum('nominal'); 
        });
    
        $totalRefunds = $data->filter(function($order) {
            return strtolower($order->status) === 'refund';
        })->sum(function($order) {
            return $order->refunds->sum('nominal');
        });
    
        $totalAmount = $data->filter(function($order) use ($statuses) {
            return in_array(strtolower($order->status), $statuses);
        })->sum('total_amount');
    
        $adjustedTotal = $totalAmount - $totalReturns - $totalRefunds;
    
        $totalStockSold = $data->sum('stock_sold');
        
        $pdf = app('dompdf.wrapper')->loadView('backend.pages.report.pdf', compact('data', 'startDate', 'endDate', 'type', 'image','totalStockSold','totalAmount','totalReturns','totalRefunds','adjustedTotal'));
    
        return $pdf->download('report.pdf');
    }
    
}
