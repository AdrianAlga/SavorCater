<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminProductContoller;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserInboxController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserProfileController;

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
Route::get('product/{product}', [UserHomeController::class, 'detailProduct'])->name('product.detail');
Route::get('inbox', [UserInboxController::class, 'index'])->name('inbox');
Route::get('order', [UserOrderController::class, 'index'])->name('order');
Route::get('order-history', [UserOrderController::class, 'history'])->name('order.history');
Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
Route::get('profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::get('checkout', [UserHomeController::class, 'checkout'])->name('checkout');
Route::get('payment', [UserHomeController::class, 'confirmPayment'])->name('payment');
Route::get('success', [UserHomeController::class, 'successPayment'])->name('success-payment');

// checkout - checkout
// Route::get('/user/etalase', fn () => view('users.etalase.index'))->name('users.etalase.index');
// Route::get('/user/checkout', fn () => view('users.etalase.checkout.index'))->name('users.checkout.index');

// Payment
// Route::get('/user/payment', fn () => view('users.payment.index'))->name('users.payment.index');

// succes
// Route::get('/user/succes', fn () => view('users.succes.index'))->name('users.succes.index');




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