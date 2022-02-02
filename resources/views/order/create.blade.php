@extends('layouts.master')
@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">
                    Payment Method
                </div>
                <div class="card-body">
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Receiver Name</label>
                            <input type="text" name="receiver_name" class="form-control @error('receiver_name') is-invalid @enderror">
                            @error('receiver_name')
                            <div class="alert alert-danger">
                                <span class="text-white">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Receiver Phone Number</label>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <div class="alert alert-danger">
                                <span class="text-white">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Receiver Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                            @error('address')
                            <div class="alert alert-danger">
                                <span class="text-white">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-auto">
                                <label for="" class="form-label">City</label>
                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror">
                                @error('city')
                                <div class="alert alert-danger">
                                    <span class="text-white">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto">
                                <label for="" class="form-label">State/Province</label>
                                <input type="text" name="state" class="form-control @error('state') is-invalid @enderror">
                                @error('state')
                                <div class="alert alert-danger">
                                    <span class="text-white">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-auto">
                                <label for="" class="form-label">Zip Code (Optional)</label>
                                <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror">
                                @error('zip_code')
                                <div class="alert alert-danger">
                                    <span class="text-white">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto">
                                <label for="" class="form-label">Payment Method</label>
                                <select class="form-select" name="payment" aria-label="Default select example">
                                    <option selected>Select Your Payment Method</option>
                                    <option value="1">KBZ Pay</option>
                                    <option value="2">Wave Money</option>
                                    <option value="3">CB Bank</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary">Submit Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
