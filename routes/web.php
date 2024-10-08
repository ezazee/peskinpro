<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/detail', function() {
    return view('frontend.pages.detail');
});

Route::get('/shop', function() {
    return view('frontend.pages.shop');
});


Route::get('/checkout', function() {
    return view('frontend.pages.checkout');
});

Route::get('/cart', function() {
    return view('frontend.pages.cart');
});


Route::get('/about-us', function() {
    return view('frontend.pages.about-us');
});

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
});


Route::get('/faq', function() {
    return view('frontend.pages.faq');
});


Route::get('/search-result', function() {
    return view('frontend.pages.search-result');
});
