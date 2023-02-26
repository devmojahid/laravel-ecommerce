<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index() {
        $orders=Order::orderBy('id','desc')->get();
        return view('admin.order.index',compact('orders'));
    }
}
