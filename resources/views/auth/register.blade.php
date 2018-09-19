@extends('layouts.app')

@section('content')
<div id="log-in" class="site-form log-in-form">
      
    <div id="log-in-head">
      <h1>{{ __('Register') }}</h1>
      <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
  </div>
  
  <div class="form-output">
      <form method="POST" action="{{ route('register') }}">
                  @csrf
          <div class="form-group label-floating">
              <label for="name" class="control-label">{{ __('Name') }}</label>
              <input class="form-control" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                 @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
          </div>
          
          <div class="form-group label-floating">
              <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
              <input class="form-control" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
          </div>
          <div class="form-group label-floating">
              <label for="password" class="control-label">{{ __('Password') }}</label>
              <input class="form-control" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
          </div>
          
          <div class="form-group label-floating">
              <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
              <input class="form-control" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>

          
          
          <div class="remember">
              <div class="checkbox">
                  <label>
                      <input name="optionsCheckboxes" type="checkbox">
                      I accept the <a href="#">Terms and Conditions</a> of the website
                  </label>
              </div>
          </div>
          
         <button type="submit" class="btn btn-lg btn-primary full-width">{{ __('Register') }} </button>

        <div class="or"></div>

          <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>sign up with Facebook</a>

          <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>sign up with Twitter</a>


          <p>you have an account? <a href="07-log_in_page.html"> Sing in !</a> </p>
      </form>
  </div>
</div>
@endsection
