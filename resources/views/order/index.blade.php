@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped" style="width:100%">
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
                    <th>Status</th>
                    <th>Control</th>
                    <th>Create At</th>
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
                            <p class="badge bg-info">{{$order->status}}</p>
                        </td>
                        <td>
                            <div class="btn-group d-flex align-items-center">
                                <a href="{{ route('order.show',$order->id) }}" class="btn btn-primary">Show</a>
                                <form action="{{route('order.confirm')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$order->id}}" name="order_id">
                                    @if($order->status === "pending")
                                        <button class="btn btn-info">Confirm</button>
                                    @elseif($order->status === "confirm")
                                        <button class="btn btn-info">Delivering</button>
                                    @elseif($order->status === "delivering")
                                        <button class="btn btn-info">Delivered</button>
                                    @elseif($order->status === "delivered")
                                        <button class="btn btn-info">Done</button>
                                    @endif

                                </form>
                                <a href="" class="btn btn-danger">Delete</a>
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
@endsection
