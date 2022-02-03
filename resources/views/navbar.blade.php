<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mx-5">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{url('/')}}">Shop Name</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{Request::segment(1) == '' ? 'active' : ''}}" href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Request::segment(1) == 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{Request::segment(1) == 'services' ? 'active' : ''}}" href="{{route('services')}}">Services</a>
                                    </li><li class="nav-item">
                                        <a class="nav-link {{Request::segment(1) == 'contact' ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                                <div class="d-flex">
                                    <a href="{{ route('cart.index') }}" class="btn btn-outline-primary">
                                        <div class="d-flex align-items-center gap-1">
                                            <i class="fas fa-shopping-cart"></i>
                                            @auth
                                                {{auth()->user()->carts->count()}}
                                            @endauth
                                        </div>
                                    </a>
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
{{--                                                    <li><a class="dropdown-item" href="{{ route('profile.change-password') }}">Password Change</a></li>--}}
{{--                                                    <li><a class="dropdown-item" href="{{ route('profile.update-photo') }}">Update Photo</a></li>--}}
{{--                                                    <li class="dropdown-divider"></li>--}}
                                                    @isAdmin
                                                    <li>
                                                        <a href="{{route('home')}}" class="dropdown-item">Dashboard</a>
                                                    </li>
                                                    @endisAdmin
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
