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
<div class="container">
    <div class="row mt-5">
        <div class="col-8">
                <div class="card shadow rounded my-5 ">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>{{ $item->model }}</h2>
                            <p class="badge bg-primary">{{ $item->category->title }}</p>
                        </div>
                        <h4>${{ $item->price }}</h4>
                        <p class="text-muted">{{ $item->brand->title }}</p>
                        <img src="{{asset('storage/photo/'.$item->feature_image)}}" alt="" class=" my-5 img-fluid">
                        <p>
                            {{ $item->description }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('index') }}" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i>
                            </a>

                            <div class="d-flex justify-content-end gap-2">
                                <input type="number" class="form-control w-25" min="0">

                                <a href="{{ route('index') }}" class="btn btn-primary">
                                    <i class="fas fa-shopping-cart"></i>g
                                </a>
                            </div>

                        </div>

                    </div>
                </div>


        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
