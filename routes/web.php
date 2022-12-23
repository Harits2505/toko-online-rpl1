<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UsermemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaUserController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\GaleryProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'daftar']);

// Untuk login dan logout
// Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// dashboard
Route::resource('/dashboard', DashboardController::class)->middleware('admin');
// kategori
Route::resource('/category', CategoryProductController::class)->middleware('admin');
// barang / produk
Route::resource('/product', BarangController::class)->middleware('admin');
// transaksi
Route::resource('/transaction', TransactionsController::class)->middleware('admin');
// user / member
Route::resource('/usermember', UsermemberController::class)->middleware('admin');
// profile
Route::resource('/profile', ProfileController::class)->middleware('admin');
Route::resource('/beranda', BerandaUserController::class)->middleware('auth');
Route::resource('/keranjang', KeranjangController::class)->middleware('auth');
Route::resource('/checkout', CheckoutController::class)->middleware('auth');
Route::resource('/profileuser', ProfileUserController::class)->middleware('auth');
Route::get('/detailbarang/{id}',  [DetailProdukController::class, 'detail'])->middleware('auth');
Route::resource('/product/{id}',  GaleryProductController::class)->middleware('admin');

