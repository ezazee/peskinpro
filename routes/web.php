<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckOngkirController;
use App\Http\Controllers\CategoryController;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/product/create', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');



// ongkir
Route::get('/ongkir', [CheckOngkirController::class, 'index'])->name('index');
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir'])->name('check_ongkir');
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities'])->name('getCities');



// settings
