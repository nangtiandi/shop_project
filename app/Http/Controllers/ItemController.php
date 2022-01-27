<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Photo;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $item = new Item();
        $item->model = ucfirst($request->model);
        $item->description = $request->description;
        $item->excerpt = Str::words($request->description,20);
        $item->price = $request->price;
        $item->category_id = $request->category_id;
        $item->brand_id = $request->brand_id;

//        feature image save
        $f_photo = $request->file('feature_image');
        $newName =  uniqid()."_photo.".$f_photo->extension();
        $f_photo->storeAs('public/photo',$newName);
        $item->feature_image = $newName;
        $item->save();
        return redirect()->route('item.create')->with('status','Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item-detail',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('item.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
//        return $request;
        $item->model = ucfirst($request->model);
        $item->description = $request->description;
        $item->excerpt = Str::words($request->description,20);
        $item->price = $request->price;
        $item->category_id = $request->category_id;
        $item->brand_id = $request->brand_id;
//        $item->feature_image = $request->feature_image;
        $f_photo = $request->file('feature_image');
        $newName =  uniqid()."_photo.".$f_photo->extension();
        $f_photo->storeAs('public/photo',$newName);
        $item->feature_image = $newName;
        $item->update();
        return redirect()->route('item.index')->with('status','Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back()->with('status','Success');
    }
}
