<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Market</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

@include('navbar')

<div class="container my-5 py-3">
    @yield('content')
</div>

<footer>
    <div class="text-center">
        <p class="mt-5">Development By <a href="">Laravel Developer</a>Read More<a href=""> privacy & terms. </a></p>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script>

</script>
</body>
</html>
