<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserOrGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->name === 'user') {
            return $next($request);
        }

        if (!Auth::check()) {
            // Allow access if the user is a guest
            return $next($request);
        }

        // Optionally, redirect or show an error if neither condition is met
        return redirect()->route('home.index')->withErrors(['message' => 'Unauthorized access.']);
    }
}
