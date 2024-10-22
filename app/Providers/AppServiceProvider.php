<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


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
    }
}
