@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="my-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <div class="card p-2">
                    <div class="card-body">
                        <table class="table align-middle">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>
                                    {{ ucfirst($order->receiver_name) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    {{ $order->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    {{ $order->address }}
                                    {{ $order->city }}
                                    {{ $order->state }}
                                </td>
                            </tr>
                            <tr>
                                <td>Zip Code</td>
                                <td>
                                    {{ $order->zip_code }}
                                </td>
                            </tr>
                            <tr>
                                <td>Item List</td>
                                <td>
                                    <ul>
                                        @foreach($order->orderItems as $oi)
                                            <li class="align-items-center">
                                                {{ucfirst($oi->item->model)  }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>
                                    @php
                                    $quantity = 0;
                                    $price = 0;
                                    foreach ($order->orderItems as $oi){
                                        $quantity += $oi->quantity;
                                        $price += $oi->item->price;
                                    }
                                    @endphp
                                    ${{ $price * $quantity }}
                                </td>
                            </tr>



{{--                            <tr>--}}
{{--                                <td>Item Img</td>--}}
{{--                                <td>--}}

{{--                                    <ul>--}}
{{--                                                                                @php--}}
{{--                                                                                $f_img =[];--}}
{{--                                                                                $o = $order->orderItems;--}}
{{--                                                                                foreach ($o as $orderItem){--}}

{{--                                                                                        array_push($f_img,$orderItem->feature_image);--}}
{{--                                                                                }--}}
{{--                                                                                @endphp--}}
{{--                                                                                @foreach($order->orderItems as $orderItem)--}}
{{--                                                                                    {{$f_photo = $orderItem->items->feature_image}}--}}
{{--                                                                                    <li>{{ $f_img }}</li>--}}
{{--                                                                                @endforeach--}}
{{--                                        @foreach($order->orderItems as $oi)--}}
{{--                                            <img src="{{ asset('storage/photo/'.$oi->feature_image) }}"  alt="">--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

                            </tbody>
                        </table>
                        <!-- Button trigger modal -->
                        @if($order->status === "pending")
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cancelOrder">
                                Cancel
                            </button>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="cancelOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cancelOrderLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="{{route('orderCancel.store')}}" method="post">
                                        @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="cancelOrderLabel">Why do you want to cancel?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <input type="hidden" value="{{$order->id}}" name="order_id">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="order_cancel" placeholder="Leave a comment here" id="orderForm"></textarea>
                                                <label for="orderForm">Write Your Reason</label>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send <i class="far fa-paper-plane"></i></button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
