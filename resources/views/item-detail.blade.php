@extends('layouts.master')
@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center">
            <div class="card p-2" style="width: 400px;height: 400px;border: none;position: relative;overflow: hidden">
                <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="mb-0">{{ $item->model }}</h5> <span>{{ $item->brand->title }}</span>
                    </div>
                    <div class="p-price d-flex flex-row"> <span>$</span>
                        <h1>{{ $item->price }}</h1>
                    </div>
                    <div class="heart"> <i class="bx bx-heart"></i> </div>
                </div>
                <div class="text-center p-image"> <img src="{{asset('storage/photo/'.$item->feature_image)}}"> </div>
                <div class="p-about">
                    <p>{{ $item->description }}</p>
                </div>
                <div class="buttons d-flex align-items-center flex-row gap-3 px-3">
                    <a href="{{ route('index') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div class="d-flex justify-content-end">
                        <form action="{{route('cart.store')}}" method="post">
                            @csrf
                            <div class="d-flex gap-2 justify-content-end">
                                <input type="hidden" name="item_id" value="{{$item->id}}">
                                <input type="number" name="quantity" class="form-control w-25" min="1" value="{{ $item->cartsByUser->first()->quantity ?? 0 }}" required>
                                <button class="btn btn-primary">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
