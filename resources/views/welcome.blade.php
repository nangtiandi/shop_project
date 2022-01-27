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

<div class="container-fluid">
    <div class="row">
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Shop Name</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link</a>
                                        </li>
                                    </ul>
                                    <div class="d-flex">
                                        <form class="d-flex mx-3">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                        <div class="">
                                            @guest
                                                <a class="btn btn-light" href="{{route('login')}}">
                                                    Sing in / Sign Up
                                                </a>
                                            @endguest
                                            @auth
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button" id="headerDropDown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="{{ asset('storage/user-photo/'.Auth::user()->photo) }}" height="30" class="rounded-circle border border-3 border-white shadow-sm" alt="">
                                                        {{ Auth::user()->name }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="headerDropDown">
                                                        @isAdmin
                                                        <li class="nav-item">
                                                            <a class="nav-link active" aria-current="page" href="{{ route('item.index') }}">Item Manage</a>
                                                        </li>
                                                        @endisAdmin
                                                        <li><a class="dropdown-item" href="{{ route('profile.change-password') }}">Password Change</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('profile.update-photo') }}">Update Photo</a></li>
                                                        <li class="dropdown-divider">
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">
                                                                Logout
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <form action="{{ route('logout') }}" class="d-none" method="post" id="logoutForm">@csrf</form>
                                                </div>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
    </div>
</div>

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
                                    <form>
                                        <div class="d-flex gap-2 justify-content-end">
                                            <input type="number" class="form-control w-25" min="0">
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
