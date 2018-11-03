@extends('layouts.app')

@section('content')
<div class="container-login">
    <div class="wrap-login">
        <div class="login-form-title" >
            <span class="login-form-title-1">
                Login to Plus Me
            </span>
        </div>
        <!-- Display Session Status -->
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
        @endif
        <form method="POST" class="login-form validate-form" action="{{ route('login') }}" >
             @csrf
            <div class="wrap-input validate-input" data-validate="Username is required">

                    <span class="label-input">{{ __('E-Mail') }}</span>
                    <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter E-mail" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input"></span>
            </div>

            <div class="wrap-input validate-inputs" data-validate = "Password is required">
                <span class="label-input">{{ __('Password') }}</span>
                <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>
            <div class="row">
                <div class="col-md-6 contact-form-checkbox">
                    <input class="input-checkbox" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">
                    <label class="label-checkbox" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="col-md-6">
                    <a class="forgetpwd" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
            <div class="container-login-form-btn">
                <button type="submit" class="login-form-btn">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
        <!-- Google Login -->
        <div class="mb-3">
            <a href="/redirect"><img src="../css/icons/google_logo.png"></a>
        </div>
        <div class="mb-3">
            <span class="noaccount">
                Don’t have an account?
            </span>
            <a href="{{ route('register') }}" class="tosignup">
                    {{ __('Sign up now !') }}
            </a>
        </div>
    </div>
</div>


@endsection

