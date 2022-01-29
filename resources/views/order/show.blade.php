@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="my-5">

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
                        @isAdmin
                        <a href="" class="btn btn-primary">Approve</a>
                        @endisAdmin
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
