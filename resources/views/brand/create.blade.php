@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/brand/create')}}">Create Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/brand/')}}">Brand Lists</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                        @error('title')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Brand Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-secondary" value="Create Brand">
                </form>
            </div>
        </div>
    </div>
@endsection
