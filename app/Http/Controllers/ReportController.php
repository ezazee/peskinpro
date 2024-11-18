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
            $products = Product::whereBetween('created_at', [$startDate, $endDate])
                           ->get();
            $data = $products->flatMap(function ($product) {
                return $product->sizes->filter(function ($size) {
                    return $size->promotion === 'yes';
                })->map(function ($size) use ($product) {
                    return [
                        'id' => $product->id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'front_image' => $product->front_image,
                        'back_image' => $product->back_image,
                        'category' => $product->category,
                        'size' => $size,
                    ];
                });
            });
        } elseif ($type === 'order') {
            $data = Order::with(['user', 'alamat', 'products', 'invoice','shipping'])
                         ->whereBetween('created_at', [$startDate, $endDate])
                         ->get();
        }

        // dd($data);

        return view('backend.pages.report.index', compact('welcomeMessage','user','data', 'startDate', 'endDate', 'type'));
    }


    public function generatePdf(Request $request)
    {
        // Fetch parameters from the request
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $type = $request->type;

        // Fetch the necessary data
        if ($type == 'stock') {
            $products = Product::whereBetween('created_at', [$startDate, $endDate])
            ->get();
            $data = $products->flatMap(function ($product) {
            return $product->sizes->filter(function ($size) {
                return $size->promotion === 'yes';
            })->map(function ($size) use ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'slug' => $product->slug,
                    'front_image' => $product->front_image,
                    'back_image' => $product->back_image,
                    'category' => $product->category,
                    'size' => $size,
                ];
            });
            });
        } elseif ($type == 'order') {
            $data = Order::whereBetween('created_at', [$startDate, $endDate])
                            ->with('user')
                            ->get();
        }

        $pdf = app('dompdf.wrapper')->loadView('backend.pages.report.pdf', compact('data', 'startDate', 'endDate', 'type'));

        return $pdf->download('report.pdf');
}
}
