<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\orderItem;
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

        $carts = Auth::user()->carts;
        foreach ($carts as $cart){
            $orderItem = new orderItem();
            $orderItem->item_id = $cart->item_id;
            $orderItem->quantity = $cart->quantity;
            $orderItem->order_id = $order->id;
            $orderItem->user_id = Auth::id();
            $orderItem->save();
            $cart->delete();
        }

        return redirect()->route('order.show',$order->id)->with('success','We will confirm your payment! Please wait a moment.');
    }
    public function orderConfirm(Request $request){
        $currentOrder = Order::findOrFail($request->order_id);
        if ($currentOrder->status === 'pending'){
            $currentOrder->status = 'confirm';
            $currentOrder->update();
            return back();
        }else if($currentOrder->status === 'confirm'){
            $currentOrder->status = 'delivering';
            $currentOrder->update();
            return back();
        }else if($currentOrder->status === 'delivering'){
            $currentOrder->status = 'delivered';
            $currentOrder->update();
            return back();
        }else if($currentOrder->status === 'delivered'){
            return back();
        }
    }
    public function show($id){
        $order = Order::find($id);

//        return $order;
        return view('order.show',compact('order'));
    }
    public function orderDeliver(){
        return view('order.deliver');
    }

}
