<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="F@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Abdulkadir Binan">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset ('assets')}}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._header')

 @section('content')
     içeriklerimiz
@show


@include('home._footer')
@yield('footerjs')


</body>
</html>

