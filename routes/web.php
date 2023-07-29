<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductContoller;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\User\UserHomeController;

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
Route::controller(LoginRegisController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', 'loginView')->name('login');
        Route::post('login', 'loginProcess')->name('loginProcess');
        Route::get('regis', 'regisView')->name('regis');
        Route::post('regis', 'regisProcess')->name('regisProcess');
    });
    Route::get('logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('', [UserHomeController::class, 'index'])->name('home');

// Home
Route::get('/user/home', fn () => view('users.home.chicken.index'))->name('users.chicken.index');
Route::get('/user/catering/cow', fn () => view('users.home.cow.index'))->name('users.cow.index');

// frozen
Route::get('/user/frozen/risol', fn () => view('users.frozen.risol.index'))->name('users.frozen.risol.index');
Route::get('/user/frozen/sosis', fn () => view('users.frozen.sosis.index'))->name('users.frozen.sosis.index');

//inbox
Route::get('/user/inbox', fn () => view('users.inbox.index'))->name('users.inbox.index');

// Order
Route::get('/user/order', fn () => view('users.order.live.index'))->name('users.order.index');
Route::get('/user/history_order', fn () => view('users.order.history.index'))->name('users.history_order.index');

// profile
Route::get('/user/profile', fn () => view('users.profile.index'))->name('users.profile.index');
Route::get('/user/edit_profile', fn () => view('users.profile.edit.index'))->name('users.edit_profile.index');

// checkout - checkout
Route::get('/user/etalase', fn () => view('users.etalase.index'))->name('users.etalase.index');
Route::get('/user/checkout', fn () => view('users.etalase.checkout.index'))->name('users.checkout.index');

// Payment
Route::get('/user/payment', fn () => view('users.payment.index'))->name('users.payment.index');

// succes
Route::get('/user/succes', fn () => view('users.succes.index'))->name('users.succes.index');




// ===== ADMIN ====== //
Route::prefix('admin')->group(function () {
    Route::get('', fn () => view('admin.home.index', ["title" => "Admin"]))->name('admin.index');
    Route::resource('product', AdminProductContoller::class)->names('admin.product');
    Route::get('message', [AdminMessageController::class, 'index'])->name('admin.message');
    Route::post('message', [AdminMessageController::class, 'store'])->name('admin.message.store');
    Route::delete('message/{message}', [AdminMessageController::class, 'destroy'])->name('admin.message.destroy');
    Route::get('order', [AdminOrderController::class, 'index'])->name('admin.order.index');
    Route::get('order/{order}', [AdminOrderController::class, 'show'])->name('admin.order.show');
    Route::delete('order/{order}', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');
});
// Route::get('/admin/home', fn()=> view('admin.home.index'))->name('admin.index');
// Route::get('/admin/produk', fn()=> view('admin.product.produk'))->name('admin.produk');
// Route::get('/admin/tambahProduk', fn()=> view('admin.product.tambahProduk'))->name('admin.tambahProduk');
// Route::get('/admin/informasiProduk', fn()=> view('admin.product.informasiProduk'))->name('admin.informasiProduk');
// Route::get('/admin/editProduk', fn()=> view('admin.product.editProduk'))->name('admin.editProduk');
// Route::get('/admin/informasiPesanan', fn()=> view('admin.order.informasiPesanan'))->name('admin.informasiPesanan');
// Route::get('/admin/pesanan', fn()=> view('admin.order.pesanan'))->name('admin.pesanan');
// Route::get('/admin/message', fn()=> view('admin.message.index'))->name('admin.message');