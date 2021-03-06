@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-4 pt-3 mt-3">
            <a href="{{ route('index') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-12 mt-1">
            <div class="">
                @php
                    $total = 0;
                    $quantity =0;
                    $item = [];
                @endphp
                @forelse($carts as $cart)
                    @php
                        $total += $cart->item->price * $cart->quantity;
                        $quantity += $cart->quantity;
                        array_push($item,$cart->item->model);
                    @endphp
                    <div class="card my-5">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <h3>{{ $cart->item->model}} </h3>
                                    <span class="badge bg-primary small">{{ $cart->item->category->title }}</span>
                                </div>
                                <h3>${{ $cart->item->price * $cart->quantity}}</h3>
                            </div>
                            <span class="small text-muted">${{ $cart->item->price }} x {{ $cart->quantity }}</span>

                            <div class="mb-3">
                                <img src="{{ asset('storage/photo/'.$cart->item->feature_image) }}" alt="" style="max-width: 120px;height: 120px;object-fit: cover">

                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $cart->item_id }}">
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="number" name="quantity" class="form-control w-25" required min="1" value="{{ $cart->quantity }}">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.destroy',$cart->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @empty
                    <h1>There is no carts.</h1>
                @endforelse
            </div>
        </div>
        <div class="col-md-5 col-sm-12 mt-1">
            <div class="my-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Your Cart Summary</h3>
                    </div>
                    <div class="card-body">
                        <h5>Total : ${{ $total }}</h5>
                        <h5>{{ auth()->user()->carts->count() > 1 ? 'Item Lists' : 'Item List' }} </h5>
                        <ul>
                            @foreach($item as $i)
                                <li>{{ ucfirst($i) }}</li>
                            @endforeach
                        </ul>
                        <h5>Quantity :{{ $quantity }} </h5>
                        <a href="{{route('order.create')}}" class="btn btn-secondary">Payment Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
