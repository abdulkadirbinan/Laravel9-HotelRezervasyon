<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')
    @yield('js')
</head>
<body>

<div class="jumbotron text-center">
    <h1>header</h1>
    <p>Resize this responsive page to see the effect!</p>
    <a href="/" >home</a>
    <a href="/aboutus" >about us</a>
    @yield('header')
</div>

<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('content')
    </div>

</div>

<div class="jumbotron text-center">
    <h1>Footer</h1>
    <p>Rsayfa altı!</p>

    @yield('footer')
</div>
</body>
</html>
