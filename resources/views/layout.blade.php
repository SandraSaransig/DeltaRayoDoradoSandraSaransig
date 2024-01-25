<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @include('partials.nav')
    </header>

    @yield('content')
    @yield('segment')
    @include('partials.footer')
</body>
</html>
