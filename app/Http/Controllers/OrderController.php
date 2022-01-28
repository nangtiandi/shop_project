<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        return view('order.index');
    }
    public function create(){
        return view('order.create');
    }
    public function store(Request $request){
        $order = new Order();
        $order->receiver_name = $request->receiver_name;
        $order->user_id = Auth::id();
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->city =$request->city;
        $order->state = $request->state;
        $order->zip_code =$request->zip_code;
        $order->payment =$request->payment;
        $order->save();
        return redirect()->route('index')->with('success','We will confirm your payment! Please wait a moment.');
    }
}
