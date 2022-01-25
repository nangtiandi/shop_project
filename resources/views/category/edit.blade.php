@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Edit Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update',$category->id) }}" class="mb-3" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" name="title" value="{{ old('title',$category->title) }}" class="form-control @error('title') is-invalid @enderror">
                                    </div>
                                    @error('title')
                                    <p class="text-danger small mt-2">{{ $message }}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <input type="text" name="icon" value="{{ old('icon',$category->icon) }}" class="form-control @error('icon') is-invalid @enderror">
                                    </div>
                                    @error('icon')
                                    <p class="text-danger small mt-2">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Update</button>
                                </div>

                            </div>


                        </form>

                        @if(session('status'))
                            <p class="alert alert-success">{{ session('status') }}</p>
                        @endif


                        @include('category.list')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
