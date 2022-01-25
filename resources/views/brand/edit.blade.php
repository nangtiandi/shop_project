@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link active" href="">Edit Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/brand/')}}">Brand Lists</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <form action="{{route('brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title',$brand->title)}}">
                        @error('title')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Brand Logo</label>
                        <br>
                        <img src="{{asset('storage/images/logos/'.$brand->logo)}}" alt="" style="width: 50px; height: auto;border-radius: 8px">

                        <input type="file" class="form-control mt-2 @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-secondary" value="Update Brand">
                </form>
            </div>
        </div>
    </div>
@endsection
