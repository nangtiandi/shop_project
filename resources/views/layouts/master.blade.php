<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Market</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

</head>
<body>

@include('navbar')

<div class="container-fluid my-5 py-3">
    @yield('content')
</div>
<footer class="footer-20192 mt-3">
    <div class="site-section bg-dark">
        <div class="container">
            <div class="cta d-block d-md-flex align-items-center px-5">
                <div>
                    <h2 class="mb-0">Have a trouble?</h2>
                    <h3 class="text-dark">Let's talk us!</h3>
                </div>
                <div class="mx-auto">
                    <a href="{{route('contact')}}" class="btn btn-dark rounded-2 py-3 px-5">Contact us</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a href="{{route('index')}}" class="footer-logo">EZ-Learn</a>
                </div>
                <div class="col-sm">
                    <h3>Customers</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{route('buyer')}}">Buyer</a></li>
                        <li><a href="#">Supplier</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h3>Company</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h3>Further Information</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{route('terms')}}">Terms &amp; Conditions</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow us</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" alt=""></span></a></li>
                        <li><a href="#"><span><img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-articleLarge-v4.jpg?quality=75&auto=webp&disable=upscale" alt=""></span></a></li>
                        <li><a href="#"><span><img src="https://denkavit.com/en/wp-content/uploads/sites/8/2021/11/LinkedIn-logo.png" alt=""></span></a></li>
                        <li><a href=""><span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/800px-Instagram_logo_2016.svg.png" alt=""></span></a></li>
                    </ul>
                </div>

            </div>
            <div class="row my-3 text-center">
                <h3>&copy; All Right Serve. | <a href="">developer.com</a></h3>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

<script src="{{asset('js/app.js')}}"></script>
<script>
    (function () {
        "use strict";

        var carousels = function () {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        };

        (function ($) {
            carousels();
        })(jQuery);
    })();

</script>
</body>
</html>
