<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index() {
        return view('admin.order.index', [
            "title" => "Pesanan",
            "orders" => Order::all(),
        ]);
    }

    public function show(Order $order) {
        return view('admin.order.show', [
            "title" => "Detail Pesanan",
            "order" => $order,
        ]);
    }

    public function destroy(Order $order) {
        $order->delete();
        return redirect()->route("admin.order.index")->with('success', "Order Berhasil dihapus");
    }
}
