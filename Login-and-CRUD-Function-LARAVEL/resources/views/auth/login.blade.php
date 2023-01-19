@extends('layouts.login-header')

@section('title', 'CRUD | Login')

@section('login')
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          @error('email')
                  <span class="invalid-feedback" style="color: red; text-align:center" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
          @enderror

          @error('password')
                <span class="invalid-feedback" style="color: red; text-align:center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror

          @error('name')
                <span class="invalid-feedback" style="color: red; text-align:center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror

          {{-- Login --}}
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>


            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">



            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
            </div>

            <input type="submit" value="{{ __('Login') }}" class="btn solid" />

            @if (Route::has('password.request'))
              <a class="btn-link text-decoration-none" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
            @endif
           
          </form>

          {{-- Register --}}
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf

            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>

              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus  />

                            
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>

              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email">

              {{-- @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror --}}
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>

              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">

              {{-- @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror      --}}

            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
            </div>

            <input type="submit" class="btn" value="{{ __('Register') }}" />



          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Be a member ?</h3>
            <p>
              Learn more about the New Knowledge Hub. 
              One location for all the latest technology, trends, and insights.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account ?</h3>
            <p>
              Capture the true value of cloud computing and artificial intelligence for your business.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>  
@endsection
