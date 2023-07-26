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
    return view('welcome');
});


// login
Route::get('/login', fn()=> view('.login'))->name('login');
Route::get('/regist', fn()=> view('.regist'))->name('regist');


// Home
Route::get('/user/home', fn()=> view('users.home.chicken.index'))->name('users.chicken.index');
Route::get('/user/catering/cow', fn()=> view('users.home.cow.index'))->name('users.cow.index');

// frozen
Route::get('/user/frozen/risol', fn()=> view('users.frozen.risol.index'))->name('users.frozen.risol.index');
Route::get('/user/frozen/sosis', fn()=> view('users.frozen.sosis.index'))->name('users.frozen.sosis.index');

//inbox
Route::get('/user/inbox', fn()=> view('users.inbox.index'))->name('users.inbox.index');

// Order
Route::get('/user/order', fn()=> view('users.order.live.index'))->name('users.order.index');
Route::get('/user/history_order', fn()=> view('users.order.history.index'))->name('users.history_order.index');

// profile
Route::get('/user/profile', fn()=> view('users.profile.index'))->name('users.profile.index');
Route::get('/user/edit_profile', fn()=> view('users.profile.edit.index'))->name('users.edit_profile.index');

// checkout - checkout
Route::get('/user/etalase', fn()=> view('users.etalase.index'))->name('users.etalase.index');
Route::get('/user/checkout', fn()=> view('users.etalase.checkout.index'))->name('users.checkout.index');

// Payment
Route::get('/user/payment', fn()=> view('users.payment.index'))->name('users.payment.index');

// succes
Route::get('/user/succes', fn()=> view('users.succes.index'))->name('users.succes.index');




// ===== ADMIN ====== //
Route::get('/admin/home', fn()=> view('admin.home.index'))->name('admin.index');
Route::get('/admin/produk', fn()=> view('admin.product.produk'))->name('admin.produk');
Route::get('/admin/tambahProduk', fn()=> view('admin.product.tambahProduk'))->name('admin.tambahProduk');
Route::get('/admin/informasiProduk', fn()=> view('admin.product.informasiProduk'))->name('admin.informasiProduk');
Route::get('/admin/editProduk', fn()=> view('admin.product.editProduk'))->name('admin.editProduk');
Route::get('/admin/informasiPesanan', fn()=> view('admin.order.informasiPesanan'))->name('admin.informasiPesanan');
Route::get('/admin/pesanan', fn()=> view('admin.order.pesanan'))->name('admin.pesanan');
Route::get('/admin/message', fn()=> view('admin.message.index'))->name('admin.message');