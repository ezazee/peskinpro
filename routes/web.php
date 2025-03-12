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
use App\Http\Controllers\BankController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AffiliateController;

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

Route::get('/faq', [FaqController::class, 'faq'])->name('home.faq');
Route::get('/faq/detail/{slug}', [FaqController::class, 'faqdetail'])->name('faq.detail');
Route::get('/return-and-refunds', [HomeController::class, 'returnrefund'])->name('returnrefund');
Route::get('/syarat-ketentuan', [HomeController::class, 'ketentuanPengguna'])->name('ketentuan');

// About

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/about/list-products', [AboutController::class, 'ListProducts'])->name('about.ListProducts');
Route::get('/about/products/cica-refreshing-toner', [AboutController::class, 'TonerProducts'])->name('about.TonerProducts');
Route::get('/about/products/honey-cleansing-gel', [AboutController::class, 'CleansingProducts'])->name('about.CleansingProducts');
Route::get('/about/products/hydro-resorative-cream', [AboutController::class, 'HydroProducts'])->name('about.HydroProducts');
Route::get('/about/products/prebiotic-feminime-mousse-cleanser', [AboutController::class, 'FeminimeProducts'])->name('about.FeminimeProducts');
Route::get('/about/products/prebiotic-pore-ex-facial-pad', [AboutController::class, 'PoreExProducts'])->name('about.PoreExProducts');
Route::get('/about/products/skin-awakening-glow-serum', [AboutController::class, 'SerumProducts'])->name('about.SerumProducts');
Route::get('/about/products/vit-c-tone-up-day-cream-spf50', [AboutController::class, 'ToneProducts'])->name('about.ToneProducts');

Route::get('/about/contact', [AboutController::class, 'AboutContact'])->name('about.contact');

Route::get('/about/news', [AboutController::class, 'AboutNews'])->name('about.news');
Route::get('/about/news/detail', [AboutController::class, 'AboutNewsDetail'])->name('about.newsDetail');


// Affiliate
Route::get('/about/affiliate', [AffiliateController::class, 'IndexAffiliate'])->name('about.affiliate');
Route::get('/about/affiliate/cara-raih-komisi', [AffiliateController::class, 'RaihKomisi'])->name('about.RaihKomisi');
Route::get('/about/affiliate/keuntungan', [AffiliateController::class, 'Keuntungan'])->name('about.Keuntungan');





Route::middleware(['userOrGuest'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
    Route::post('/cart/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    // Route::get('/checkout', [ChekoutController::class, 'index'])->name('chekout.index');
    // Route::get('/checkout/process', [ChekoutController::class, 'Checkout'])->name('checkout.process');
    Route::post('/checkout/process', [ChekoutController::class, 'Checkout'])->name('checkout.process');
    Route::get('/pembayaran/{invoice_number}', [ChekoutController::class, 'payment'])->name('payment');
    Route::post('/payment/process', [ChekoutController::class, 'processpayment'])->name('processpayment');
    Route::post('/pembayaran/{invoice_number}', [ChekoutController::class, 'pembayaran'])->name('pembayaran');
    Route::post('/update-order-status', [ChekoutController::class, 'updateStatus'])->name('update-order-status');
    Route::post('/apply-coupon', [ChekoutController::class, 'applyCoupon'])->name('apply.coupon');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profiles/{id}/update', [ProfileController::class, 'update'])->name('usersprofiles');
    Route::get('/address', [ProfileController::class, 'address'])->name('profile.address');
    Route::get('/address/edit/{id}', [ProfileController::class, 'editaddress'])->name('edit.address');
    Route::post('/update-address/{id}', [ProfileController::class, 'updateAddress'])->name('updateAddress');
    Route::post('/address', [ProfileController::class, 'add_address'])->name('profile.add_address');
    Route::delete('/address/delete{id}', [ProfileController::class, 'delete_address'])->name('delete_address');
    Route::post('/set-default-address/{id}', [ProfileController::class, 'setDefaultAddress'])->name('set_default_address');
    Route::get('/order', [ProfileController::class, 'recent_order'])->name('recent_order');
    Route::get('/detail-order/{order_number}', [ProfileController::class, 'detail_order'])->name('detail-order');

    Route::post('/order/selesai/{order:order_number}', [ProfileController::class, 'Orderselesai'])->name('order.Orderselesai');
    Route::post('/order/batal/{order:order_number}', [ProfileController::class, 'OrderBatal'])->name('order.OrderBatal');

    // afiliate
    Route::get('/profile/affiliate', [AffiliateController::class, 'index'])->name('affiliate.index');
    Route::get('/affiliate/transaksi', [AffiliateController::class, 'AffiliateTransaksi'])->name('affiliate.transaksi');
    Route::get('/affiliate/history/komisi', [AffiliateController::class, 'HistoryKomisi'])->name('affiliatehistory.komisi');
    Route::get('/affiliate/history/transaksi', [AffiliateController::class, 'HistoryTransaksi'])->name('affiliatehistory.transaksi');
    Route::post('/affiliate/withdraw', [AffiliateController::class, 'Withdraw'])->name('affiliate.Withdraw');
    Route::get('/share-referral', [AffiliateController::class, 'share'])->name('referral.share');
    Route::get('/checkout', [AffiliateController::class, 'checkout'])->name('referral.checkout');

});


Route::middleware(['auth', 'role:Administrator,Management,Admin,Finance,Writter'])->group(function () {

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

    // cetak
    Route::get('/receipt/{orderId}', [OrdersController::class, 'showReceipt'])->name('receipt.show');


    // settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/banner', [SettingsController::class, 'banner'])->name('settings.banner');
    Route::delete('/banner/delete/s{id}', [SettingsController::class, 'deletebanner'])->name('deletebanner');
    Route::get('/update-bestseller/{id}', [SettingsController::class, 'updateBestseller'])->name('update.bestseller');
    Route::get('/update-promotion/{id}', [SettingsController::class, 'updatePromotion'])->name('update.promotion');

    Route::post('/add/popup', [SettingsController::class, 'add_popup'])->name('settings.add_popup');
    Route::post('/add/headnav', [SettingsController::class, 'headnavbanner'])->name('settings.headnavbanner');
    Route::post('/delete/popup', [SettingsController::class, 'delete_popup'])->name('settings.delete_popup');
    Route::post('/add/bannerbundle', [SettingsController::class, 'bannerbundle'])->name('settings.bannerbundle');
    Route::post('/add/bannerknowlage', [SettingsController::class, 'bannerknowlage'])->name('settings.bannerknowlage');
    Route::post('/add/bannershop', [SettingsController::class, 'bannershop'])->name('settings.bannershop');
    Route::post('/add/bannerflashsale', [SettingsController::class, 'bannerflashsale'])->name('settings.bannerflashsale');
    Route::post('/add/timerflashsale', [SettingsController::class, 'timerflashsale'])->name('settings.timerflashsale');

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

    Route::get('/users/profile/{id}', [UsersController::class, 'profile'])->name('users.profile');
    Route::put('/profile/update/{id}', [UsersController::class, 'update_profile'])->name('users.update_profile');

    Route::get('/customers/list', [UsersController::class, 'customers'])->name('customers.index');

    // coupons
    Route::get('/coupons/list', [CouponsController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/create', [CouponsController::class, 'create'])->name('coupons.create');
    Route::post('/coupons/create', [CouponsController::class, 'add'])->name('coupons.add');
    Route::get('/coupons/edit/{id}', [CouponsController::class, 'edit'])->name('coupons.edit');
    Route::put('/coupons/{id}/update', [CouponsController::class, 'update'])->name('coupons.update');
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

    // bank
    Route::get('/bank', [BankController::class, 'index'])->name('bank.index');
    Route::post('/bank/update/{id}', [BankController::class, 'update'])->name('bank.update');
    Route::post('/bank', [BankController::class, 'create'])->name('bank.create');
    Route::get('/bank/edit/{slug}', [BankController::class, 'edit'])->name('bank.edit');
    Route::delete('/bank/delete/{id}', [BankController::class, 'destroy'])->name('bank.destroy');

    // faq
    Route::get('/faq/list', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq/create', [FaqController::class, 'add'])->name('faq.add');
    Route::delete('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('/faq/update/{id}', [FaqController::class, 'update'])->name('faq.update');

    // print
    Route::get('/backprint', [OrdersController::class, 'backprint'])->name('backprint');
    Route::get('/print_receipt/{inv_number}', [OrdersController::class, 'print_receipt'])->name('print_receipt');

    // Inventory Management (LIST STOCK)
    Route::get('/inventory/list-stock', [InventoryController::class, 'listStockIndex'])->name('listStock.index');
    Route::get('/inventory/list-stock/edit', [InventoryController::class, 'listStockEdit'])->name('listStock.edit');
    Route::get('/inventory/list-stock/create', [InventoryController::class, 'listStockCreate'])->name('listStock.create');

    // Inventory Management (OOS Product) / ( Expired Product)
    Route::get('/inventory/exp-product', [InventoryController::class, 'expProductIndex'])->name('expProduct.index');

    // Inventory Management (Add Category Stock)
    Route::get('/inventory/add-category', [InventoryController::class, 'addCategoryIndex'])->name('addCategory.index');

    // Inventory Management (Transaction History)
    Route::get('/inventory/transaction-history', [InventoryController::class, 'transactionHistoryIndex'])->name('transactionHistory.index');
    Route::get('/inventory/transaction-history/detail', [InventoryController::class, 'transactionHistoryDetail'])->name('transactionHistory.detail');
    Route::get('/inventory/transaction-history/create', [InventoryController::class, 'transactionHistoryCreate'])->name('transactionHistory.create');

    // Inventory Management (Detail Supplier)
    Route::get('/inventory/detail-supplier', [InventoryController::class, 'detailSupplierIndex'])->name('detailSupplier.index');

    // affiliate
    Route::get('/affiliate/commision', [AffiliateController::class, 'CommisionAffiliate'])->name('commision.affiliate');
    Route::post('/products/bulk-update-commission', [AffiliateController::class, 'bulkUpdateCommission'])->name('commision.bulkUpdateCommission');
    Route::get('/affiliate/history/{id}', [AffiliateController::class, 'HistoryUserAffiliate'])->name('history.affiliate');
    Route::get('/affiliate/member', [AffiliateController::class, 'MemberAffiliate'])->name('member.affiliate');
    Route::get('/affiliate/withdraw', [AffiliateController::class, 'WithdrawAffiliate'])->name('Withdraw.affiliate');
    Route::get('/affiliate/withdraw/accept/{id}', [AffiliateController::class, 'acceptWithdraw'])->name('withdraw.accept');
    Route::post('/affiliate/withdraw/reject/{id}', [AffiliateController::class, 'rejectWithdraw'])->name('withdraw.reject');


});



Route::get('/search-result', function () {
    return view('frontend.pages.search-result');
});
