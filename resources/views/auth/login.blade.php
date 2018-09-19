@extends('layouts.app')

@section('content')
<div id="log-in" class="site-form log-in-form">
      
    <div id="log-in-head">
      <h1>{{ __('Login') }}</h1>
      <div id="logo"><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></div>
  </div>
  
  <div class="form-output">
      <form method="POST" action="{{ route('login') }}">
                  @csrf
          <div class="form-group label-floating">
              <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
          </div>
          <div class="form-group label-floating">
              <label for="password" class="control-label">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
          </div>
          
          <div class="remember">
              <div class="checkbox">
                  <label for="remember">
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          {{ __('Remember Me') }}
                  </label>
              </div>
              <a href="{{ route('password.request') }}" class="forgot">{{ __('Forgot Your Password?') }}</a>
          </div>
          
          <button type="submit" class="btn btn-lg btn-primary full-width">{{ __('Login') }}</button>

        <div class="or"></div>

          <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>

          <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


          <p>Don't you have an account? <a href="#">Register Now!</a> </p>
      </form>
  </div>
</div>
@endsection
