@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      Manage Category
                    </div>
                    <div class="card-body">

                        <form action="{{ route('category.store') }}" class="mb-3" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" name="title" value="{{ old('title') }}" placeholder="New Category Name" class="form-control @error('title') is-invalid @enderror">
                                    </div>
                                    @error('title')
                                    <p class="text-danger small mt-2">{{ $message }}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <input type="text" name="icon" value="{{ old('icon') }}" placeholder="New Icon Name" class="form-control @error('icon') is-invalid @enderror">
                                    </div>
                                    @error('icon')
                                    <p class="text-danger small mt-2">{{ $message }}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Add Category</button>
                                    </div>
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
