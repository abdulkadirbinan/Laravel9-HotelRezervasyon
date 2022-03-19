<html>
<head>
    <title>Layout title @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
    xxxxx <br>
    yyy <br>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
