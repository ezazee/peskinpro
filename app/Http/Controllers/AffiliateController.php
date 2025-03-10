<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Models\Settings;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Models\Affiliate;
use App\Models\ProductSize;
use App\Models\Withdraw;
use App\Models\AffiliateHistory;



class AffiliateController extends Controller
{
    public function index()
    {    
        $settings = Settings::all();
        $user = Auth::user();
        $totalCommission = Affiliate::where('user_id', $user->id)
        ->sum('commission');

        $totalProductsSold = Affiliate::where('user_id', $user->id)
        ->with('order.products')
        ->get()
        ->flatMap(function ($affiliate) {
            return $affiliate->order ? $affiliate->order->products : [];
        })
        ->count();

        $affiliateHistory = AffiliateHistory::where('user_id', $user->id)
        ->where('type','addcommission')
        ->with(['affiliate.order.products', 'referredUser'])
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('frontend.pages.profile.affiliate', compact('totalProductsSold','totalCommission','user', 'settings','affiliateHistory'));
    }

    public function HistoryKomisi(){
        $settings = Settings::all();
        $user = Auth::user();
        
        $affiliateHistory = AffiliateHistory::where('user_id', $user->id)
        ->where('type','addcommission')
        ->with(['affiliate.order.products', 'referredUser'])
        ->orderByDesc('created_at')
        ->paginate(10);
        return view('frontend.pages.profile.history-komisi', compact('user', 'settings','affiliateHistory'));
    }

    public function HistoryTransaksi(){
        $settings = Settings::all();
        $user = Auth::user();

        $affiliateHistory = AffiliateHistory::where('user_id', $user->id)
        ->where('type','withdraw')
        ->with(['user', 'affiliate', 'withdraw'])
        ->orderByDesc('created_at')
        ->paginate(10);

        // dd($affiliateHistory);
        return view('frontend.pages.profile.history-transaksi', compact('user', 'settings','affiliateHistory'));
    }

    public function AffiliateTransaksi(){
        $settings = Settings::all();
        $user = Auth::user();
        $totalCommission = Affiliate::where('user_id', $user->id)
        ->sum('commission');
        return view('frontend.pages.profile.transaksi', compact('user', 'settings','totalCommission'));
    }

    public function Withdraw(Request $request)
    {
        $user = Auth::user();
    
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah.');
        }
    
        $totalCommission = Affiliate::where('user_id', $user->id)->sum('commission');
    
        if ($request->nominal > $totalCommission) {
            return back()->with('error', 'Saldo tidak mencukupi untuk pencairan.');
        }
    
        $withdraw = Withdraw::create([
            'user_id' => $user->id,
            'amount' => $request->nominal,
            'payment_method' => $request->payment_method,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'status' => 'pending',
        ]);
    
        $remainingWithdraw = $request->nominal;
        $affiliates = Affiliate::where('user_id', $user->id)->orderBy('id', 'asc')->get();
    
        foreach ($affiliates as $affiliate) {
            if ($affiliate->commission >= $remainingWithdraw) {
                $affiliate->update(['commission' => $affiliate->commission - $remainingWithdraw]);
        
                AffiliateHistory::create([
                    'user_id' => $user->id,
                    'affiliate_id' => $affiliate->id,
                    'type' => 'withdraw',
                    'history_status' => 'pending',
                    'amount' => $remainingWithdraw,
                    'description' => 'Pencairan dana dari affiliate',
                ]);
        
                break;
            } else {
                $remainingWithdraw -= $affiliate->commission;
        
                AffiliateHistory::create([
                    'user_id' => $user->id,
                    'affiliate_id' => $affiliate->id,
                    'type' => 'withdraw',
                    'history_status' => 'pending',
                    'amount' => $affiliate->commission,
                    'description' => 'Pencairan dana dari affiliate',
                ]);
        
                $affiliate->update(['commission' => 0]);
            }
        }

        return back()->with('success', 'Pencairan dana berhasil diajukan.');
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


    public function MemberAffiliate(){
        $user = Auth::user();
        $welcomeMessage = 'Affiliate Member';

        $memberAffiliate = Affiliate::select('user_id')
        ->selectRaw('SUM(commission) as total_commission')
        ->with('user')
        ->groupBy('user_id')
        ->orderByDesc('total_commission')
        ->paginate(5);

        return view('backend.pages.affiliate.memberlist',compact('welcomeMessage','user','memberAffiliate'));
    }


    public function rejectWithdraw(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        
        if ($withdraw->status !== 'pending') {
            return back()->with('error', 'Withdraw sudah diproses.');
        }
    
        $withdraw->update(['status' => 'rejected']);
    
        $restoredAmount = $withdraw->amount;
        $affiliates = Affiliate::where('user_id', $withdraw->user_id)->orderBy('id', 'desc')->get();
        
        foreach ($affiliates as $affiliate) {
            $affiliate->update(['commission' => $affiliate->commission + $restoredAmount]);
    
            $history = AffiliateHistory::where('user_id', $withdraw->user_id)
                ->where('type', 'withdraw')
                ->latest()
                ->first();
    
            if ($history) {
                $history->update([
                    'type' => 'refund',
                    'amount' => $restoredAmount,
                    'history_status' => 'rejected',
                    'description' => 'Pengembalian saldo dari withdraw yang ditolak',
                ]);
            }
    
            break;
        }
    
        return back()->with('success', 'Withdraw telah ditolak, saldo dikembalikan.');
    }

    
    public function acceptWithdraw(){

    }
    

    public function WithdrawAffiliate()
    {
        $user = Auth::user();
        $welcomeMessage = 'Affiliate Withdraw';
        
        $withdrawRequests = Withdraw::where('status', 'pending')->paginate(10);
    
        return view('backend.pages.affiliate.withdraw', compact('welcomeMessage', 'user', 'withdrawRequests'));
    }

    
}
