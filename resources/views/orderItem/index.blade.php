@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-8 p-3">
            <div class="my-5">
                <div>
                    <h2 class="mb-5">Order Lists</h2>
                </div>
                <div class="card mb-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4> User Name</h4>
                            <a href="" class="btn btn-primary">Confirm</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Item list</h5>
                        <h5>Quantity</h5>
                        <h5>Total</h5>
                        <h5>Address</h5>
                        <h5>Zip Code</h5>
                    </div>
                </div>
                <div class="card mb-5">
                    <div class="card-header">
                        <h4> User Name</h4>
                    </div>
                    <div class="card-body">
                        <h5>Item Name </h5>
                        <h5>Quantity</h5>
                        <h5>Total</h5>
                        <h5>Address</h5>
                        <h5>Zip Code</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
