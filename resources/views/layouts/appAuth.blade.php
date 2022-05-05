<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src=""></script>
</head>
<body>

  <div class=" nav-bar d-flex flex-row-reverse w-100 h-25 p-2 bg-light shadow">
    
    @guest
      <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('login') }}">LogIn</a>
      <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('register') }}">Register</a>
      @else
      <h5 class="d-flex fw-bold fs-4 m-3">Hello</h5>
      <a class="d-flex fw-bold fs-4 m-3 text-decoration-none" href="{{ route('logout') }}">aaaLogOut</a>
    @endguest
  </div>
  @yield('content')
</body>
</html>