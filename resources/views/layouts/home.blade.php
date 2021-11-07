<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('css')
    @yield('jss')

</head>
<body>

<div class="jumbotron text-center">
    <h1>header</h1>
    <p>Resize this responsive page to see the effect!</p>
    <a href="/">Home</a>
    <a href="aboutus">About us</a>
    @yield('header')
</div>

<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('content')

    </div>
</div>

<div class="jumbotron text-center">
    <h1>footer</h1>
    <p>sayfa altı</p>
    @yield('footer')
</div>

</body>
</html>
