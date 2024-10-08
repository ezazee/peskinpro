<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;

class MergeCart
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Authenticated  $event
     * @return void
     */
    public function handle(Authenticated $event)
    {
        if (session()->has('cart') && Auth::check()) {
            (new CartController)->mergeCart();
        }
    }
}
