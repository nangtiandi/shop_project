<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 0){
            return redirect()->route('index');
        }
        return view('home');
    }
    public function welcome(){
        $items = Item::latest('id')->paginate(12);
        return view('welcome',compact('items'));
    }
}
