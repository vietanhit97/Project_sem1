<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index(Request $req){
        $orders = Order::search()->paginate(4); 
        return view('admin.order.order',compact('orders'));
    }
    public function show(Order $order) {
        return view('admin.order.show',compact('order'));
    }
   
}
