<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class UserHomeController extends Controller
{
    public function index() {
        return view('users.home', [
            "title" => "Home",
            "products" => Product::all(),
        ]);
    }

    public function detailProduct(Product $product) {
        return view('users.product-detail', [
            "title" => "Detail Product",
            "product" => $product,
        ]);
    }

    public function checkout() {
        return view('users.checkout', [
            "title" => "Cehckout",
        ]);
    }

    public function confirmPayment() {
        return view('users.confirm-payment',[
            "title" =>"Konfirmasi Pembayaran",
        ]);
    }

    public function successPayment() {
        return view('users.success-payment', [
            "title" => "Success Payment",
        ]);
    }
}
