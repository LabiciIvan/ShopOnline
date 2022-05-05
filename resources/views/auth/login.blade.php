@extends('layouts.users')

@section('title', 'LogIn Store-Online')

@section('products')
<div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center mt-4">
  <form class="d-flex flex-column w-50 h-10 align-items-center" action="{{ route('login') }}" method="POST">
    @csrf
      <div class="d-flex flex-column w-25 h-100">

        <label class="form-label" for="email">Email</label>
        <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email">
          @if ($errors->has('email'))
            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
          @endif


        <label class="form-label" for="password">Password</label>
        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="text" name="password" id="password">
          @if ($errors->has('password'))
            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
          @endif

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
              <label class="form-check-label"  for="remember">Remember Me</label>
            </div>
          </div>

        <input class="btn btn-primary mt-4" type="submit" value="Log In">
      </div>

  </form>
</div>
@endsection