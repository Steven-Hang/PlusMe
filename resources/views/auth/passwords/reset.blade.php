@extends('layouts.app')

@section('content')
<div class="container-reset">
    <div class="wrap-reset">
        <div class="reset-form-title" >
            <span class="reset-form-title-1">
                Reset Your Password
            </span>
        </div>
        <form method="POST" class="reset-form validate-form" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
            @csrf
            <div class="wrap-input validate-input" data-validate="Username is required">
                <input type="hidden" name="token" value="{{ $token }}">
                <span class="label-input">{{ __('E-Mail') }}</span>
                <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Enter E-mail" required autofocus>
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

            <div class="wrap-input validate-inputs" data-validate = "Password confirmation is required">
                <span class="label-input">{{ __('Confirm Password') }}</span>
                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" placeholder="Confirm password" required>
                <span class="focus-input"></span>
            </div>

            <div class="container-reset-form-btn pt-4">
                <button type="submit" class="reset-form-btn">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection
