<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile');
Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::middleware('role:admin')->get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk');
Route::get('profileadmin', [App\Http\Controllers\ProfileAdminController::class, 'index'])->name('profileadmin');
Route::post('profileadmin', [App\Http\Controllers\ProfileAdminController::class, 'update'])->name('profileadmin');

Route::get('cart/{id}', [App\Http\Controllers\CartController::class, 'index']);
Route::post('cart/{id}', [App\Http\Controllers\CartController::class, 'pesan']);
Route::get('checkout', [App\Http\Controllers\CartController::class, 'checkout']);
Route::delete('checkout/{id}', [App\Http\Controllers\CartController::class, 'delete']);
Route::get('confirm', [App\Http\Controllers\CartController::class, 'confirm']);
Route::get('konfirmasi', [App\Http\Controllers\HistoryController::class, 'konfirmasi']);
Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('transaksi/{id}', [App\Http\Controllers\HistoryController::class, 'transaksi']);
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);
Route::post('/checkout', [App\Http\Controllers\CartController::class, 'payment_post']);
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/empty', [App\Http\Controllers\CartController::class, 'empty'])->name('empty');
Route::get('/out', [App\Http\Controllers\CartController::class, 'out'])->name('out');
Route::get('/table', [App\Http\Controllers\AdminController::class, 'orders'])->name('table');
Route::delete('orders/{id}', [App\Http\Controllers\AdminController::class, 'orders_delete']);
Route::get('/customers', [App\Http\Controllers\AdminController::class, 'customers'])->name('customers');
Route::delete('customers/{id}', [App\Http\Controllers\AdminController::class, 'customers_delete']);
Route::middleware('role:admin')->resource('produk', App\Http\Controllers\ProdukController::class);
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk');
Route::get('/parallax', [App\Http\Controllers\ParallaxController::class, 'index'])->name('parallax');

Route::get('/detail', [App\Http\Controllers\HistoryController::class, 'index'])->name('detail');



