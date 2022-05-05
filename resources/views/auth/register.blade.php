@extends('layouts.users')

@section('title' ,'Register to Store-Online')

@section('products')
  <div class="d-flex flex-column w-100 h-100 justify-content-center align-items-center mt-4">
    <form class="d-flex flex-column w-50 h-10 align-items-center" action="{{ route('register') }}" method="POST">
      @csrf
        <div class="d-flex flex-column w-25 h-100">
          <label class="form-label" for="name">Name</label>
          <input class="form-control {{ $errors->has('name') ? ' is-invalid': '' }}" type="text" name="name" id="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                  {{ $errors->first('name') }}
                </span>
            @endif

          <label class="form-label" for="email">Email</label>
          <input class="form-control {{ $errors->has('email') ? ' is-invalid': '' }}" type="text" name="email" id="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                    {{ $errors->first('email') }}
                  </span>
                @endif
          <label class="form-label" for="password">Password</label>
          <input class="form-control {{ $errors->has('password') ? ' is-invalid': '' }}" type="text" name="password" id="password">
                @if ($errors->has('password'))
                <span class="invalid-feedback">
                  {{ $errors->first('password') }}
                </span>
                @endif
          <label class="form-label" for="password_confirmed">Repeat Password</label>
          <input class="form-control" type="text" name="password_confirmation" id="password_confirmed">
    
          <input class="btn btn-primary mt-4" type="submit" value="Register">
        </div>

    </form>
  </div>
  
@endsection