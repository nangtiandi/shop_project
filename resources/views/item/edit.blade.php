@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/item/create')}}">Create Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/item/')}}">Item Lists</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @if(session('status'))

                        <p class="alert alert-success">{{ session('status') }}</p>

                    @endif
                    <div class="mb-3">
                        <label for="" class="form-label">Model Name</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{old('model',$item->model)}}">
                        @error('model')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Item Feature</label>
                        <input type="file" class="form-control @error('feature_image') is-invalid @enderror" name="feature_image">
                        @error('feature_image')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Item Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="7">{{old('description',$item->description)}}</textarea>
                        @error('description')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Item Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price',$item->price)}}">
                        @error('price')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Item Brand</label>
                        <select name="brand_id" id="" class="form-select">
                            @foreach(\App\Models\Brand::all() as $brand)
                                <option value="{{$brand->id}}" {{ old('brand',$item->brand_id == $brand->id)? 'selected':'' }}>{{$brand->title}}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Item Category</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{$category->id}}" {{ old('category_id',$item->category_id == $category->id)? 'selected':'' }} >{{$category->title}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary">Update Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
