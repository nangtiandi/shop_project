<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

@include('navbar')

<div class="container my-5 py-3">
    <div class="row">
        @foreach(\App\Models\Item::all() as $item)
            <div class="col-md-4 col-xs-12 my-4 ">
                <div class="card shadow rounded" >
                    <div class="card-body">
                        <h3 class="my-3">{{$item->model}}</h3>
                        <a href="#">
                            <img src="{{asset('storage/photo/'.$item->feature_image)}}" alt="" class="img-fluid">
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="ms-3">From ${{$item->price}}</p>
                            @guest
                                <div class="d-flex">
                                    <a href="{{route('register')}}" class="btn btn-primary me-3">Register</a>
                                    <a href="{{ route('item.show',$item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </div>
                            @endguest
                            @auth()
                                <div class="d-flex justify-content-end">
                                    <form action="{{route('cart.store')}}" method="post">
                                        @csrf
                                        <div class="d-flex gap-2 justify-content-end">
                                            <input type="hidden" name="item_id" value="{{$item->id}}">
                                            <input type="number" name="quantity" class="form-control w-25" min="1" value="{{ $item->cartsByUser->first()->quantity ?? 0 }}" required>
                                            <button class="btn btn-primary">
                                                <i class="fas fa-shopping-cart"></i>
                                            </button>
                                            <a href="{{ route('item.show',$item->id) }}" class="btn btn-primary">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script>

</script>
</body>
</html>
