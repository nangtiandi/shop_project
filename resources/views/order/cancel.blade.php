@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Order Item</th>
                                <th>Reason</th>
                                <th>Times</th>
                                <th>Manage Buttons</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Models\OrderCancel::all() as $order_cancel)
                                <tr>
                                    <td>{{$order_cancel->id}}</td>
                                    <td>{{$order_cancel->user->name}}</td>
                                    <td>{{$order_cancel->order_id}}</td>
                                    <td>{{$order_cancel->order_cancel}}</td>
                                    <td>{{$order_cancel->created_at->format('d/m/y')}}</td>
                                    <td>
                                        <form action="{{route('orderCancel.destroy',$order_cancel->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
