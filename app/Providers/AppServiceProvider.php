<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cartItemCount = 0;
    
            if (Auth::check()) {
                // Authenticated user
                $cartItemCount = Auth::user()->cart ? Auth::user()->cart->items()->count() : 0;
            } else {
                // Guest user
                $guestCartId = session()->getId();
                $cart = Cart::where('guest_id', $guestCartId)->first();
                $cartItemCount = $cart ? $cart->items()->count() : 0;
            }
            // dd($cartItemCount);
            $view->with('cartItemCount', $cartItemCount);
        });

        View::composer('backend.components.sidebar', function ($view) {
            $pendingReviewCount = Order::whereHas('invoice', function ($query) {
                $query->whereNotNull('bukti_tf')
                      ->where('payment_status', 'unpaid');
            })
            ->where('status', 'pending')
            ->count();
        
            $processinglist = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
                ->where('status', 'processing')
                ->count();

            $shippinglist = Order::with(['user', 'alamat', 'products', 'invoice', 'shipping'])
                ->where('status', 'shipping')
                ->count();
        
            $view->with([
                'pendingReviewCount' => $pendingReviewCount,
                'processinglist' => $processinglist,
                'shippinglist' => $shippinglist
            ]);
        });
    }
}
