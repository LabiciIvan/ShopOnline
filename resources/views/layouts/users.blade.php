<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="nav d-flex flex-row border-bottom shadow-sm  justify-content-center align-items-center "
        style="height:100px">
            @guest

                <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('login') }}">LogIn</a>
                <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('register') }}">Register</a>
            @else
            <a class="me-4 text-dark text-decoration-none" style="font-size: 25px"
            href="{{ route('users.index') }}">Home</a>
            <a class="me-4 text-dark text-decoration-none" style="font-size: 25px"
            href="{{ route('users.contact') }}">Contact</a>
            <a class="me-4 text-dark text-decoration-none" style="font-size: 25px"
            href="{{ route('users.viewCart') }}">Cart</a>

                <h5 class="d-flex fw-italic fs-4 m-3 text-warning">Hello</h5>
                <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout ({{ Auth::user()->name }})</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          @endguest
    </div>
    @yield('products')
</body>

</html>
