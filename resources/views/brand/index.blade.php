@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/brand/create')}}">Create Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/brand/')}}">Brand Lists</a>
            </li>
        </ul>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Brand Name</th>
                        <th>Brand Logo</th>
                        <th>Brand Create_Time</th>
                        <th>Action Buttons</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->title}}</td>
                            <td>
                                <img src="{{asset('storage/images/logos/'.$brand->logo)}}" alt="" style="width: 50px; height: auto;border-radius: 8px">
                            </td>
                            <td>
                                <p class="m-0">
                                    <i class="fas fa-calendar text-muted"></i>
                                    {{$brand->created_at->format('d / m / Y')}}
                                    ||
                                    <i class="fas fa-clock text-info"></i>
                                    {{$brand->created_at->format('h:i:a')}}
                                </p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('brand.edit',$brand->id)}}" class="mx-2">
                                        <i class="fas fa-pen-alt"></i>
                                    </a>
                                    <form action="{{route('brand.destroy',$brand->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger mx-2">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{$brands->links()}}
            </div>
        </div>
    </div>
@endsection
