@extends('layouts.master')
@section('content')
    <div class="row justify-content-center my-3">
        @php
            $total = 0;
            $quantity =0;
            $item = [];
        @endphp
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">items</div>
                        </div>
                    </div>
                    @forelse($carts as $cart)
                        @php
                            $total += $cart->item->price * $cart->quantity;
                            $quantity += $cart->quantity;
                            array_push($item,$cart->item->model);
                        @endphp
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="{{ asset('storage/photo/'.$cart->item->feature_image) }}"></div>
                                <div class="col">
                                    <div class="row text-muted">{{ $cart->item->model}}</div>
                                    <div class="row">{{ $cart->item->category->title }}</div>
                                </div>
                                <div class="col d-flex justify-content-between">
                                    <form action="{{ route('cart.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="item_id" value="{{ $cart->item_id }}">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="number" name="quantity" class="form-control" required min="1" value="{{ $cart->quantity }}">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <form action="{{ route('cart.destroy',$cart->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col">$ {{ $cart->item->price }} <span class="close">&#10005;</span> {{ $cart->quantity }} = {{ $cart->item->price * $cart->quantity}}</div>
                            </div>
                        </div>
                    @empty
                        <h1>There is no carts.</h1>
                    @endforelse
                    <div class="back-to-shop"><a href="{{ route('index') }}" class="text-decoration-none">&leftarrow; <span class="text-muted">Back to shop</span></a></div>
                </div>

                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS {{ $quantity }}</div>
                        <div class="col text-right">$ {{ $total }}</div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col" style="padding-left:0;">Tax :</div>
                        <div class="col text-right"> 0 </div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">$ {{ $total }}</div>
                    </div>
                    <a href="{{route('order.create')}}" class="btn btn-secondary">CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
@endsection
