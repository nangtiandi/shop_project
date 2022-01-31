@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Receiver Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip Code</th>
                            <th>Payment</th>
                            <th>Control</th>
                            <th>Create At</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Order::all() as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->receiver_name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->city}}</td>
                                <td>{{$order->state}}</td>
                                <td>{{$order->zip_code}}</td>
                                <td>{{$order->payment}}</td>
                                <td>
                                    <p class="badge bg-info">Delivering</p>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('order.show',$order->id) }}" class="btn btn-primary">Show</a>
                                        <a href="" class="btn btn-info">Done</a>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 small">
                                        <i class="fas fa-calendar fa-fw"></i> {{ $order->created_at->format('d / m / Y') }}
                                    </p>
                                    <p class="mb-0 small">
                                        <i class="fas fa-clock fa-fw"></i>
                                        {{ $order->created_at->format("h:i a") }}
                                    </p>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
