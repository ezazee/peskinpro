<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Returned;
use App\Models\Shipping;
use App\Models\ProductSize;
use RealRashid\SweetAlert\Facades\Alert;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\UsbPrintConnector;
use Illuminate\Support\Facades\Log;


class OrdersController extends Controller
{
    public function list(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'Orders';
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');

        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
        ->when($query, function ($q) use ($query) {
            $q->where('order_number', 'like', "%{$query}%");
        })
        ->whereHas('invoice', function ($query) {
            $query->where(function ($q) {
                $q->whereNotNull('bukti_tf')
                  ->orderByRaw("FIELD(payment_status, 'unpaid') DESC")
                  ->orWhereNull('bukti_tf');
            });
        })
        ->orderByRaw("FIELD(status, 'canceled') ASC")
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        $paymentrefund = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->whereHas('invoice', function ($query) {
            $query->where('payment_status', 'refunded');
        })
        ->count();

        $shippingorder = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->where('status','shipping')
        ->count();

        $processing = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->where('status','processing')
        ->count();

        $paymentpending = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->where('status','pending')
        ->whereHas('invoice', function ($query) {
            $query->where('payment_status', 'unpaid')
                ->whereNull('bukti_tf');
        })
        ->count();

        $pendingreview = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->where('status','pending')
        ->whereHas('invoice', function ($query) {
            $query->where('payment_status', 'unpaid')
                ->whereNotNull('bukti_tf');
        })
        ->count();

        $orderpos = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->whereHas('user', function ($query) {
            $query->where('role_id', [1, 2]);
        })
        ->count();

        $orderuser = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->where('status','completed')
        ->whereHas('user', function ($query) {
            $query->where('role_id', [3]);
        })
        ->count();
        $ordercancel =  Order::where('status','canceled')->count();
        return view('backend.pages.orders.list',compact('welcomeMessage','user','orders','paymentrefund','ordercancel','paymentpending','pendingreview','shippingorder','orderpos','processing','orderuser'));
    }


    public function proceslist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Processing Orders';
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');

        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
        ->when($query, function ($q) use ($query) {
            $q->where('order_number', 'like', "%{$query}%");
        })
        ->where('status','processing')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('backend.pages.orders.proceslist',compact('welcomeMessage','user','orders'));
    }

    public function pendingreview(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'Pending Review Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->whereHas('invoice', function ($query) {
                $query->whereNotNull('bukti_tf')
                      ->where('payment_status', 'unpaid');
            })
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('backend.pages.orders.pendingreview',compact('welcomeMessage','user','orders'));
    }

    public function shippinglist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'Pending Review Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->where('status', 'shipping')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('backend.pages.orders.shippinglist',compact('welcomeMessage','user','orders'));
    }


    public function canceledlist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Canceled Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->where('status', 'canceled')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('backend.pages.orders.canceledlist',compact('welcomeMessage','user','orders'));
    }

    public function completedlist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Completed Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->where('status', 'completed')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('backend.pages.orders.completedlist',compact('welcomeMessage','user','orders'));
    }

    public function detail($orderNumber){
        $orders = Order::with(['user', 'alamat', 'products', 'invoice','shipping','returns','refunds'])
        ->where('order_number', $orderNumber)
        ->firstOrFail();
        $hasReturns = $orders->returns()->exists();
        $hasRefunds = $orders->refunds()->exists();
        $user = Auth::user();
        $welcomeMessage = 'Detail Order'; 
        return view('backend.pages.orders.detail',compact('welcomeMessage','user','orders','hasReturns','hasRefunds'));
    }

    public function pos(){
        $orders = Order::with(['user', 'alamat', 'products', 'invoice'])
        ->whereHas('user', function ($query) {
            $query->where('role_id', 1);
        })
        ->orderBy('id', 'desc') 
        ->paginate(10);
        $user = Auth::user();
        $welcomeMessage = 'Point Of Sale';
        $products = Product::with('sizes', 'category')->get();
        $cartItems = Auth::user()->cart ? Auth::user()->cart->items()->with(['product', 'productSize'])->get() : [];

        $expandedProducts = $products->flatMap(function ($product) {
            return $product->sizes->map(function ($size) use ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'images' => $product->front_image,
                    'category' => $product->category,
                    'size' => $size,
                ];
            });
        });
        $countcart = count($cartItems);
        return view('backend.pages.orders.pos',compact('welcomeMessage','user','expandedProducts','cartItems','countcart','orders'));
    }


    public function add_cart_pos(Request $request)
    {    
        $product = Product::findOrFail($request->product_id);
        $productSizeId = $request->product_size_id;
    
        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
        $cartItem = CartItem::where('cart_id', $cart->id)
                            ->where('product_size_id', $request->product_size_id)
                            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id, 
                'product_size_id' => $productSizeId, 
                'quantity' => $request->quantity,
            ]);
        }
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = CartItem::find($id);

        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang.');
        }

        return redirect()->back()->with('error', 'Item tidak ditemukan.');
    }

    public function clearall()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'All items have been removed from your cart.');
    }


    public function pos_order(Request $request){
        $userId = Auth::id();
        $total_amount = $request->total_amount;
        $paymentMethod = $request->payment_method;
        $kembali = $request->kembali;
        $kode_bayar = $request->kode_bayar;



        if (empty($request->products) || count($request->products) === 0) {
            Alert::warning('Note', 'Please select the product first!');
            return redirect()->back()->with('error', 'Mohon pilih produk terlebih dahulu.');
        }        

        $order = Order::create([
            'user_id' => $userId,
            'order_number' => 'ORD' . strtoupper(uniqid()),
            'total_amount' => $total_amount,
            'status' => 'completed',
            'kembali' => $kembali,
            'kode_bayar' => $kode_bayar,
            'payment_method' => $paymentMethod,
        ]);

        foreach ($request->products as $product) {
            $productId = $product['id']; 
            $quantity = $product['quantity']; 
            $sizeId = $product['sizeid'];
            $harga = $product['harga'];
            $discount = $product['discount'];

    
            $productItem = Product::find($productId);
                
            $order->products()->attach($productId, [
                'quantity' => $quantity,
                'size_id' => $sizeId,
                'harga' => $harga,
                'discount' => $discount
            ]);
    
            $productSize = ProductSize::where('product_id', $productId)->where('id', $sizeId)->first();
            if ($productSize) {
                $productSize->stock -= $quantity; 
                $productSize->save(); 
            }
        }

        $invoice = $order->invoice()->create([
            'invoice_number' => 'INV' . strtoupper(uniqid()),
            'amount' => $total_amount,
            'invoice_date' => now(),
            'payment_status' => 'paid',
        ]);

        $order->save();
    
        $cart = Auth::user()->cart;
        if ($cart) {
            $cart->items()->delete();
        }

        try {
            $printer = null;
            foreach (glob('/dev/rfcomm*') as $device) {
                Log::debug("Mencoba perangkat Bluetooth: " . $device);
        
                if (is_readable($device)) {
                    $bluetoothConnector = new FilePrintConnector($device);
                    $printer = new Printer($bluetoothConnector);
                    Log::debug("Terhubung dengan printer Bluetooth: " . $device);
                    break;
                }
            }
        
            if ($printer) {
                Log::debug("Printer ditemukan, mulai pencetakan...");
                $printer->setEmphasis(true);
                $printer->text("===== STRUK PEMBAYARAN =====\n");
                $printer->setEmphasis(false);
                $printer->text("User ID: " . $userId . "\n");
                $printer->text("Total Amount: Rp" . number_format($totalAmount, 0, ',', '.') . "\n");
                $printer->text("Payment Method: " . $paymentMethod . "\n");
                $printer->text("Kembalian: Rp" . number_format($kembali, 0, ',', '.') . "\n");
                $printer->text("===========================\n");
                $printer->text("Terima kasih atas pembelian Anda!\n");
                $printer->close();
                Log::debug("Pencetakan selesai.");
            } else {
                Log::error("Printer tidak ditemukan.");
                throw new \Exception("Printer tidak ditemukan.");
            }
        } catch (\Exception $e) {
            Log::error("Gagal mencetak struk: " . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal mencetak struk: ' . $e->getMessage());
        }

        Alert::success('Success', 'Orders successfully!');
        return redirect()->back()->with('success', 'Orders Success.');    
    }

    public function accept(Order $order)
    {
        $order->update([
            'status' => 'processing',
        ]);
    
        if ($order->invoice) {
            $order->invoice->update([
                'payment_status' => 'paid',
            ]);
        }
        Alert::success('Success', 'Orders Accept to Processing!');
        return redirect()->back()->with('success', 'Order and payment status updated successfully.');
    }
    
    public function reject(Order $order)
    {
        $order->update([
            'status' => 'canceled',
        ]);
        Alert::error('Rejected', 'Orders Rejected!');
        return redirect()->back()->with('success', 'Order and payment status updated successfully.');
    }

    public function delivered(Order $order, Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string|max:255',
        ]);
    
        $tracking_number = $request->tracking_number;
    
        $shipping = $order->shipping()->first();
    
        if ($shipping) {
            $shipping->update([
                'tracking_number' => $tracking_number,
            ]);
        } else {
            $order->shipping()->create([
                'tracking_number' => $tracking_number,
            ]);
        }
    
        $order->update([
            'status' => 'shipping',
        ]);
    
        Alert::success('Success', 'Order is now in Shipping status!');
        return redirect()->back()->with('success', 'Order and payment status updated successfully.');
    }
    

    // return and refund
    public function returnrefundlist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Return And Refund Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping','returns','refunds'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->whereIn('status', ['return', 'refund'])            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('backend.pages.return.list',compact('welcomeMessage','user','orders'));
    }

    public function returnlist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Return Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping','returns','refunds'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->where('status', 'return')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('backend.pages.return.listreturn',compact('welcomeMessage','user','orders'));
    }

    public function returnorder(Request $request){

        $returnOrder = Returned::create([
            'order_id' => $request->order_id,
            'nominal' => $request->nominal,
            'status' => 'approved',
            'return_number' => 'RET-' . $request->order_number,
            'reason' => $request->reason,
        ]);

        $order = Order::find($request->order_id);
        if ($order) {
            $order->status = 'return';
            $order->save();
        }
        
        return redirect()->back()->with('success', 'Returns successfully.');
    }

    public function refundlist(Request $request){
        $user = Auth::user();
        $welcomeMessage = 'List Refund Orders';
        $query = $request->input('query');
    
        $orders = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping','returns','refunds'])
            ->when($query, function ($q) use ($query) {
                $q->where('order_number', 'like', "%{$query}%");
            })
            ->where('status', 'refund')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('backend.pages.return.listrefund',compact('welcomeMessage','user','orders'));
    }
    

    public function showReceipt($orderId)
    {
        $order = Order::with(['user', 'products', 'alamat'])->findOrFail($orderId);
        // dd($order);
        return view('backend.pages.invoice.label', compact('order'));
    }

}