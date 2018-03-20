<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(Request $request){
    	$orders = \App\ServiceOrder::orderBy('created_at', 'DESC')->limit(10)->get();
    	return view('Orders.order')->with('orders', $orders);
    }
}
