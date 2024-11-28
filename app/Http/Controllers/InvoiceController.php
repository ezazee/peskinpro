<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;


class InvoiceController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'Invoice';
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');

        $invoices = Invoice::with(['order.user', 'order.alamat', 'order.products'])
        ->when($query, function ($q) use ($query) {
            $q->where('invoice_number', 'like', "%{$query}%")
              ->orWhereHas('order', function ($q) use ($query) {
                  $q->where('order_number', 'like', "%{$query}%");
              });
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $totalinvoices = $invoices->count();
        $totalinvoicespaid = Invoice::where('payment_status', 'paid')->count();
        $totalinvoicesunpaid = Invoice::where('payment_status', 'unpaid')->count();
        $totalinvoicerefunded = Invoice::where('payment_status', 'refunded')->count();

        return view('backend.pages.invoice.list',compact('welcomeMessage','user','invoices','totalinvoices','totalinvoicespaid','totalinvoicesunpaid','totalinvoicerefunded'));
    }


    public function detail($invoiceNumber)
    {
        $invoices = Invoice::with('order.user', 'order.alamat', 'order.products.sizes','order.shipping')
        ->where('invoice_number', $invoiceNumber)
        ->firstOrFail();
        // dd($invoices);
        $user = Auth::user();
        $welcomeMessage = 'Detail Invoice';
        return view('backend.pages.invoice.detail', compact('welcomeMessage', 'user', 'invoices'));
    }
    
}
