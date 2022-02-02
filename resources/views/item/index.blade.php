@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/item/create')}}">Create Item</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/item/')}}">Item Lists</a>
            </li>
        </ul>
        <div class="row">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Feature_Image</th>
                        <th>Controls</th>
                        <th>Created_At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                    <tr>
                        <td>{{$item->model}}</td>
                        <td>{{$item->category->title}}</td>
                        <td>{{$item->brand->title}}</td>
                        <td>{{$item->excerpt}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <img src="{{ asset('storage/photo/'.$item->feature_image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('item.edit',$item->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-pencil-alt fa-fw"></i>
                                </a>
                                <button class="btn btn-outline-primary btn-sm" form="del{{ $item->id }}">
                                    <i class="fas fa-trash-alt fa-fw"></i>
                                </button>
                            </div>

                            <form action="{{ route('item.destroy',$item->id) }}" class="d-none" id="del{{ $item->id }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                        <td>
                            <p class="mb-0 small">
                                <i class="fas fa-calendar fa-fw"></i> {{ $item->created_at->format('d / m / Y') }}
                            </p>
                            <p class="mb-0 small">
                                <i class="fas fa-clock fa-fw"></i>
                                {{ $item->created_at->format("h:i a") }}
                            </p>
                        </td>

                    @empty
                        <tr>
                            <td colspan="5">There is no Category</td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Model</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Feature_Image</th>
                        <th>Controls</th>
                        <th>Created_At</th>
                    </tr>
                    </tfoot>
                </table>
        </div>
    </div>
@endsection

