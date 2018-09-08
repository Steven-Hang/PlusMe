@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity: 0.96">
                <div class="card-header">{{ __('Login') }} to PlusMe</div>
                <div class="card-body">
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
                    <!-- Begin Login Form -->
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6"></div>
                            <div class="col-md-4">
                                <a class="forgetpwd" href="{{ route('password.request') }}" style="color=:coral;">
                                        {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn-login">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group row">
                                <div class="col-md-8">
                                    Not a member?
                                    <a class="signup" href="{{ route('register') }}">
                                            {{ __('Sign up now !') }}
                                    </a>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
