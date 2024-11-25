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
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReportController;



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

// ongkir
Route::get('/ongkir', [CheckOngkirController::class, 'index'])->name('index');
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir'])->name('check_ongkir');
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities'])->name('getCities');

Route::get('/artikel', [ArticleController::class, 'blogarticle'])->name('blogarticle');
Route::get('/artikel/{slug}', [ArticleController::class, 'articlebyTittle'])->name('articlebyTittle');

Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
Route::post('/login/user', [AuthenticationController::class, 'userLogin'])->name('userLogin');

Route::get('/pskinpro', [AuthenticationController::class, 'showadminLogin'])->name('showadminLogin');

Route::get('/register', [AuthenticationController::class, 'show_register'])->name('show_register');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/detail/{slug}', [ShopController::class, 'detail'])->name('shop.detail');

Route::middleware(['userOrGuest'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
    Route::post('/cart/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/checkout', [ChekoutController::class, 'index'])->name('chekout.index');
    // Route::get('/checkout/process', [ChekoutController::class, 'Checkout'])->name('checkout.process');
    Route::post('/checkout/process', [ChekoutController::class, 'Checkout'])->name('checkout.process');
    Route::get('/pembayaran/{invoice_number}', [ChekoutController::class, 'payment'])->name('payment');
    Route::post('/payment/process', [ChekoutController::class, 'processpayment'])->name('processpayment');
    Route::post('/pembayaran/{invoice_number}', [ChekoutController::class, 'pembayaran'])->name('pembayaran');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/address', [ProfileController::class, 'address'])->name('profile.address');
    Route::post('/address', [ProfileController::class, 'add_address'])->name('profile.add_address');
    Route::delete('/address/delete{id}', [ProfileController::class, 'delete_address'])->name('delete_address');
    Route::post('/set-default-address/{id}', [ProfileController::class, 'setDefaultAddress'])->name('set_default_address');
});


Route::middleware(['auth', 'role:Administrator'])->group(function () {

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

    // orders
    Route::get('/orders/list', [OrdersController::class, 'list'])->name('orders.list');
    Route::get('/process/list', [OrdersController::class, 'proceslist'])->name('orders.proceslist');
    Route::get('/pendingreview/list', [OrdersController::class, 'pendingreview'])->name('orders.pendingreview');
    Route::get('/shipping/list', [OrdersController::class, 'shippinglist'])->name('orders.shippinglist');
    Route::get('/canceled/list', [OrdersController::class, 'canceledlist'])->name('orders.canceledlist');
    Route::get('/completed/list', [OrdersController::class, 'completedlist'])->name('orders.completedlist');
    Route::get('/orders/detail/{orderNumber}', [OrdersController::class, 'detail'])->name('orders.detail');
    Route::get('/pos', [OrdersController::class, 'pos'])->name('orders.pos');
    Route::post('/add_cart/pos', [OrdersController::class, 'add_cart_pos'])->name('add_cart_pos');
    Route::get('/cart/delete/{id}', [OrdersController::class, 'remove'])->name('cart.delete');
    Route::get('/cart/clearall', [OrdersController::class, 'clearall'])->name('cart.clearall');
    Route::post('/orders/pos', [OrdersController::class, 'pos_order'])->name('pos_order');
    Route::post('/order/accept/{order}', [OrdersController::class, 'accept'])->name('order.accept');
    Route::post('/order/reject/{order}', [OrdersController::class, 'reject'])->name('order.reject');
    Route::post('/order/delivered/{order}', [OrdersController::class, 'delivered'])->name('order.delivered');

    
    Route::get('/returnandrefund/list', [OrdersController::class, 'returnrefundlist'])->name('orders.returnrefundlist');
    // orders return
    Route::get('/return/list', [OrdersController::class, 'returnlist'])->name('orders.returnlist');
    Route::post('/return', [OrdersController::class, 'returnorder'])->name('orders.return');
    // order refund
    Route::get('/refund/list', [OrdersController::class, 'refundlist'])->name('orders.refundlist');
    Route::post('/refund', [OrdersController::class, 'refundorder'])->name('orders.refund');

    // settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/banner', [SettingsController::class, 'banner'])->name('settings.banner');
    Route::delete('/banner/delete/s{id}', [SettingsController::class, 'deletebanner'])->name('deletebanner');
    Route::get('/update-bestseller/{id}', [SettingsController::class, 'updateBestseller'])->name('update.bestseller');
    Route::get('/update-promotion/{id}', [SettingsController::class, 'updatePromotion'])->name('update.promotion');

    // invoice
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('/invoice/detail/{invoiceNumber}', [InvoiceController::class, 'detail'])->name('invoice.detail');

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
    Route::post('/coupons/create', [CouponsController::class, 'add'])->name('coupons.add');
    Route::delete('/coupons/delete/{id}', [CouponsController::class, 'destroy'])->name('coupons.destroy');

    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/create', [ArticleController::class, 'add'])->name('article.add');
    Route::get('/article/list', [ArticleController::class, 'list'])->name('article.list');
    Route::get('/article/edit/{slug}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');

    // report
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::get('/report/generate', [ReportController::class, 'generate'])->name('report.generate');
    Route::get('/report/pdf', [ReportController::class, 'generatePdf'])->name('report.generatePdf');



});

Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
});

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
});


Route::get('/faq', function () {
    return view('frontend.pages.faq');
});


Route::get('/search-result', function () {
    return view('frontend.pages.search-result');
});

Route::get('/return-and-refunds', function () {
    return view('frontend.pages.return-and-refunds');
});

Route::get('/recent-order', function () {
    return view('frontend.pages.profile.recent-order');
});

