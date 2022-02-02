@extends('layouts.master')
@section('content')
    <main>
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
            <div class="row justify-content-between my-3 search-sticky">
                <div class="col-md-4 mb-1">
                    <form action="">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </form>
                </div>
                <div class="col-md-4">
                    <select name="category_id" id="" class="form-select">
                        @foreach(\App\Models\Category::latest('id')->get() as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                @foreach(\App\Models\Item::all() as $item)
                <div class="col">
                    <div class="card-box h-100 shadow-sm"> <img src="{{asset('storage/photo/'.$item->feature_image)}}" class="card-img-top" alt="{{$item->model}}">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">{{ $item->category->title }}</span> <span class="float-end price-hp">$ {{$item->price}}</span> </div>
                            <h5 class="card-title">{{$item->model}}</h5>
                            <div class="text-center">
                                @guest
                                <a href="{{ route('item.show',$item->id) }}" class="btn btn-primary">
                                    View Details
                                </a>
                                @endguest
                                @auth()
                                    <div class="d-flex justify-content-end">
                                        <form action="{{route('cart.store')}}" method="post">
                                            @csrf
                                            <div class="d-flex justify-content-center mb-3">
                                                <input type="hidden" name="item_id" value="{{$item->id}}">
                                                <input type="number" name="quantity" class="form-control me-1 w-25" min="1" value="{{ $item->cartsByUser->first()->quantity ?? 0 }}" required>
                                                <button class="btn btn-primary ms-1">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </button>
                                            </div>
                                            <a href="{{ route('item.show',$item->id) }}" class="nav-link text-secondary">
                                                View Details
                                            </a>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
