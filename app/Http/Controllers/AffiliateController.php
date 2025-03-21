<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Models\User;
use App\Models\Settings;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Models\Affiliate;
use App\Models\ProductSize;
use App\Models\Withdraw;
use App\Models\AffiliateHistory;
use Hashids\Hashids;
use Illuminate\Support\Facades\Cache;



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
        ->whereIn('type', ['withdraw', 'approved','rejected'])
        ->with(['user', 'affiliate', 'withdraw'])
        ->orderByDesc('created_at')
        ->paginate(10);

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
            Alert::toast('Password salah.', 'info');
            return back()->with('error', 'Password salah.');
        }

        $totalCommission = Affiliate::where('user_id', $user->id)->sum('commission');

        if ($request->nominal < 50000) {
            Alert::toast('Minimal penarikan adalah Rp 50.000.', 'info');
            return back()->with('error', 'Minimal penarikan adalah Rp 50.000.');
        }

        if ($request->nominal > $totalCommission) {
            Alert::toast('Saldo tidak mencukupi untuk pencairan.', 'info');
            return back()->with('error', 'Saldo tidak mencukupi untuk pencairan.');
        }

        $withdraw = Withdraw::create([
            'user_id' => $user->id,
            'amount' => $request->nominal,
            'payment_method' => "Transfer",
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


    public function redirectToProduct($short_hash)
    {
        $hashids = new Hashids('', 6);
        $decoded = $hashids->decode($short_hash);

        if (count($decoded) != 2) {
            abort(404);
        }

        list($slug, $referral_code) = $decoded;

        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        return redirect()->route('shop.detail', ['slug' => $product->slug]) . '?ref=' . $referral_code;
    }

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

        $memberAffiliate = User::whereHas('role', function ($roleQuery) {
            $roleQuery->where('name', 'Affiliate');
        })->paginate(10);

        return view('backend.pages.affiliate.memberlist',compact('welcomeMessage','user','memberAffiliate'));
    }

    public function MemberRequest(){
        $user = Auth::user();
        $welcomeMessage = 'Affiliate Member Request';

        $memberAffiliate = User::whereHas('role', function ($roleQuery) {
            $roleQuery->where('name', 'Affiliate');
        })
        ->where('affiliate_status', 'pending')
        ->paginate(10);  

        return view('backend.pages.affiliate.member_request',compact('welcomeMessage','user','memberAffiliate'));
    }

    public function approveMemberAffiliate($id)
    {
        $user = User::findOrFail($id);
        $user->update(['affiliate_status' => 'approve']);
        Alert::success('success', 'Member Approve successfully.');
        return redirect()->route('member.request')->with('success', 'Member approved successfully');
    }

    public function rejectMemberAffiliate($id)
    {
        $user = User::findOrFail($id);
        $user->update(['affiliate_status' => 'reject']);
        Alert::info('INFO', 'Member Reject successfully.');
        return redirect()->route('member.request')->with('success', 'Member reject successfully');
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
                    'type' => 'rejected',
                    'amount' => $restoredAmount,
                    'history_status' => 'rejected',
                    'description' => 'Pengembalian saldo dari withdraw yang ditolak',
                ]);
            }

            break;
        }
        return back()->with('success', 'Withdraw telah ditolak, saldo dikembalikan.');
    }


    public function acceptWithdraw($id)
    {
        $withdraw = Withdraw::findOrFail($id);

        if ($withdraw->status === 'pending') {
            $withdraw->update([
                'status' => 'approved'
            ]);

            AffiliateHistory::create([
                'user_id' => $withdraw->user_id,
                'withdraw_id' => $withdraw->id,
                'type' => 'approved',
                'history_status' => 'approved',
                'amount' => $withdraw->amount,
                'description' => 'Pencairan dana telah diterima',
            ]);

            Alert::success('success', 'Withdraw berhasil diterima.');
            return redirect()->back()->with('success', 'Withdraw berhasil diterima.');
        }

        return redirect()->back()->with('error', 'Withdraw sudah diproses sebelumnya.');
    }


    public function HistoryUserAffiliate($id)
    {
        $user = User::with(['affiliates', 'affiliateHistory'])->findOrFail($id);
        $welcomeMessage = 'Affiliate History';
        $totalCommission = Affiliate::where('user_id', $id)
        ->sum('commission');

        $his = AffiliateHistory::where('user_id', $id)
            ->whereIn('type', ['withdraw', 'approved', 'rejected','addcommission'])
            ->with(['user', 'affiliate', 'withdraw','affiliate.order.products', 'referredUser','order.products'])
            ->orderByDesc('created_at')
            ->paginate(10);

        // dd($his);
        return view('backend.pages.affiliate.detailhistory', compact('welcomeMessage', 'user', 'his','totalCommission'));
    }

    public function DetailRequest($id){

        $user = User::with(['affiliates', 'affiliateHistory'])->findOrFail($id);
        $welcomeMessage = 'Detail Request Affiliate';
        return view('backend.pages.affiliate.detail_request', compact('user','welcomeMessage'));
    }

    public function WithdrawAffiliate()
    {
        $user = Auth::user();
        $welcomeMessage = 'Affiliate Withdraw';

        $withdrawRequests = Withdraw::where('status', 'pending')->paginate(10);

        return view('backend.pages.affiliate.withdraw', compact('welcomeMessage', 'user', 'withdrawRequests'));
    }

    public function IndexAffiliate()
    {
        return view('affiliate.index');
    }

    public function RaihKomisi(){
        return view('affiliate.pages.komisi');
    }

    public function Keuntungan(){
        return view('affiliate.pages.keuntungan');
    }

    public function productLink(){
        $settings = Settings::all();
        $user = Auth::user();
        $products = Product::with('category', 'sizes')->orderBy('created_at', 'desc')->paginate(10);

        foreach ($products as $product) {
            $referralCode = auth()->check() ? auth()->user()->referral_code : 'default_ref';
        
            $linkreal = route('shop.detail', ['slug' => $product->slug, 'ref' => $referralCode]);
        
            $shortCode = substr(hash('sha256', $linkreal), 0, 10);
        
            $linkshort = url('/s/' . $shortCode);
        
            Cache::put('shortlink_' . $shortCode, $linkreal, now()->addDays(30));
            $shortLinks[$product->id] = $linkshort;
        }
        return view('frontend.pages.profile.affiliate-product-link', compact('settings', 'user','products','shortLinks'));
    }

    public function affiliateSettings(){
        $settings = Settings::all();
        $user = Auth::user();
        return view('frontend.pages.profile.affiliate-settings', compact('settings', 'user'));
    }

    public function affiliateSettingsUpdate(Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'affiliate_alamat' => 'nullable|string',
            'password' => 'nullable|string|min:8|confirmed',
            'images' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user->name = $request->name;
        $user->affiliate_alamat = $request->affiliate_alamat;

        if ($request->hasFile('images')) {
            if ($user->images) {
                Storage::delete('public/' . $user->images);
            }

            $path = $request->file('images')->store('avatars', 'public');
            $user->images = $path;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        Alert::toast('Profil berhasil diperbarui.', 'success');

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}
