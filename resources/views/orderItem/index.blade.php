@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-8 p-3">
            <div class="my-5">
                <div>
                    <h2 class="mb-5">Order Lists</h2>
                </div>

                    {{ $orderItem }}
                    <div class="card mb-5">
                        <div class="card-header">
                            <h4>

                            </h4>
                        </div>
                        <div class="card-body">


                            <h5>Total</h5>
                            <h5>Address</h5>
                            <h5>Zip Code</h5>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
