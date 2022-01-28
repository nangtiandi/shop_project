<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();
        $carts = Auth::user()->carts;
        return view('cart.index',compact('carts','cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {

        $currentItemsInCart = auth()->user()->carts->pluck('item_id')->toArray();
        if(in_array($request->item_id,$currentItemsInCart)){
            $currentItem = Cart::where("item_id",$request->item_id)->where("user_id",Auth::id())->first();
            $currentItem->quantity =  $request->quantity;


            $currentItem->update();
            return redirect()->back();
        }

        $cart = new Cart();
        $cart->quantity = $request->quantity;
        $cart->item_id = $request->item_id;
        $cart->user_id = Auth::id();
        $cart->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $num = \auth()->user()->carts->count();
        $cart->delete();
        if ($num > 1){
            return redirect()->back();
        }elseif ($num ==1){
            return redirect()->route('index');
        }
    }
}
