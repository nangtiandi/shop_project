<?php

namespace App\Http\Controllers;

use App\Models\OrderCancel;
use App\Http\Requests\StoreOrderCancelRequest;
use App\Http\Requests\UpdateOrderCancelRequest;
use Illuminate\Support\Facades\Auth;

class OrderCancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.cancel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderCancelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderCancelRequest $request)
    {
        $request->validate([
           'order_cancel' => 'required'
        ]);
        $order_cancel = new OrderCancel();
        $order_cancel->order_id = $request->order_id;
        $order_cancel->user_id = Auth::id();
        $order_cancel->order_cancel = $request->order_cancel;
        $order_cancel->save();
        return back()->with('success','so sad');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderCancel  $orderCancel
     * @return \Illuminate\Http\Response
     */
    public function show(OrderCancel $orderCancel)
    {
        return view('order.reason',compact('orderCancel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderCancel  $orderCancel
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderCancel $orderCancel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderCancelRequest  $request
     * @param  \App\Models\OrderCancel  $orderCancel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderCancelRequest $request, OrderCancel $orderCancel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderCancel  $orderCancel
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderCancel $orderCancel)
    {
        $orderCancel->delete();
        return back();
    }
}
