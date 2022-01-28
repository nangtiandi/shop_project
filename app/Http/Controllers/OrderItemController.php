<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreorderItemRequest;
use App\Http\Requests\UpdateorderItemRequest;
use App\Models\orderItem;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orderItem.index');
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
     * @param  \App\Http\Requests\StoreorderItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderItemRequest $request)
    {
        DB::transaction(function () {
            DB::beginTransaction();
            try{

                DB:commit();
            }catch (\Exception $e){
                DB::rollBack();
                throw $e;
                }
        });
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(orderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(orderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderItemRequest  $request
     * @param  \App\Models\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderItemRequest $request, orderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderItem $orderItem)
    {
        //
    }
}