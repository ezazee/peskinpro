<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckOngkirController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChekoutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CouponsController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/product/create', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
Route::get('/products/{slug}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/detail/{slug}', [ProductController::class, 'detail'])->name('product.detail');
Route::delete('/product/delete{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


// ongkir
Route::get('/ongkir', [CheckOngkirController::class, 'index'])->name('index');
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir'])->name('check_ongkir');
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities'])->name('getCities');

// settings
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/banner', [SettingsController::class, 'banner'])->name('settings.banner');
Route::delete('/banner/delete/s{id}', [SettingsController::class, 'deletebanner'])->name('deletebanner');

Route::middleware(['guest'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
    Route::post('/cart/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
});

// shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/detail/{slug}', [ShopController::class, 'detail'])->name('shop.detail');

// Route::get('/detail', function() {
//     return view('frontend.pages.detail');
// });
Route::get('/checkout', [ChekoutController::class, 'index'])->name('chekout.index');
Route::post('/checkout/process', [ChekoutController::class, 'processCheckout'])->name('checkout.process');

// orders
Route::get('/orders/list', [OrdersController::class, 'list'])->name('orders.list');
Route::get('/orders/detail', [OrdersController::class, 'detail'])->name('orders.detail');

// invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoice/detail', [InvoiceController::class, 'detail'])->name('invoice.detail');

// users
Route::get('/users/list', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users/add', [UsersController::class, 'add_admin'])->name('users.add_admin');
Route::get('/users/{slug}/edit', [UsersController::class, 'edit_admin'])->name('users.edit_admin');
Route::put('/users/update/{id}', [UsersController::class, 'update_admin'])->name('users.update_admin');
Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');



Route::get('/customers/list', [UsersController::class, 'customers'])->name('customers.index');



// coupons
Route::get('/coupons/list', [CouponsController::class, 'index'])->name('coupons.index');
Route::get('/coupons/create', [CouponsController::class, 'create'])->name('coupons.create');







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

Route::get('/return-and-refunds', function() {
    return view('frontend.pages.return-and-refunds');
});

Route::get('/login', function() {
    return view('frontend.pages.auth.login');
});

Route::get('/register', function() {
    return view('frontend.pages.auth.regist');
});

Route::get('/profile', function() {
    return view('frontend.pages.profile.profile');
});

Route::get('/address', function() {
    return view('frontend.pages.profile.addres');
});
