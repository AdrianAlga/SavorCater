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
Route::get('/login', fn()=> view('.login'))->name('.login');
Route::get('/regist', fn()=> view('.regist'))->name('.regist');

// Home = petshop
Route::get('/user/home', fn()=> view('users.home.food.index'))->name('users.food.index');
Route::get('/user/drug', fn()=> view('users.home.drug.index'))->name('users.drug.index');
Route::get('/user/accessories', fn()=> view('users.home.accessories.index'))->name('users.accessories.index');

// Grooming
Route::get('/user/grooming', fn()=> view('users.grooming.index'))->name('users.grooming.index');

//inbox
Route::get('/user/inbox', fn()=> view('users.inbox.index'))->name('users.inbox.index');

// Booking
Route::get('/user/booking', fn()=> view('users.booking.live.index'))->name('users.booking.index');
Route::get('/user/history_booking', fn()=> view('users.booking.history.index'))->name('users.history_booking.index');

// profile
Route::get('/user/profile', fn()=> view('users.profile.index'))->name('users.profile.index');
Route::get('/user/edit_profile', fn()=> view('users.profile.edit.index'))->name('users.edit_profile.index');

// checkout - checkout
Route::get('/user/etalase', fn()=> view('users.etalase.index'))->name('users.etalase.index');
Route::get('/user/checkout', fn()=> view('users.etalase.checkout.index'))->name('users.checkout.index');

// checkout_grooming - checkout_grooming
Route::get('/user/etalase_grooming', fn()=> view('users.etalase_grooming.index'))->name('users.etalase_grooming.index');
// Route::get('/user/checkout_grooming', fn()=> view('users..etalase_grooming.checkout.index'))->name('users.checkout_grooming.index');

// succes
Route::get('/user/succes', fn()=> view('users.succes.index'))->name('users.succes.index');
Route::get('/user/succes_grooming', fn()=> view('users.succes.grooming.index'))->name('users.succes_grooming.index');
