<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class UserOrderController extends Controller
{
    public function index() {
        return view('users.order.index', [
            "title" => "Order",
            // "orders" => Order
        ]);
    }

    public function history() {
        return view('users.order.order-history', [
            "title" => "Order History",
        ]);
    }
}
