<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // index
    public function index()
    {
        $orders = Order::with(('cashier'))->orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.orders.index', compact('orders'));
    }
}
