@extends('layouts.master')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-6">
            <div class="card shadow rounded my-5 ">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>{{ $item->model }}</h2>
                        <p class="badge bg-primary">{{ $item->category->title }}</p>
                    </div>
                    <h4>${{ $item->price }}</h4>
                    <p class="text-muted">{{ $item->brand->title }}</p>
                    <img src="{{asset('storage/photo/'.$item->feature_image)}}" alt="" class=" my-5 img-fluid">
                    <p>
                        {{ $item->description }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
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
    </div>
@endsection
