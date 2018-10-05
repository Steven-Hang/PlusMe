@extends('layouts.app')

@section('content')
<div class="container-reset">
    <div class="wrap-reset">
        <div class="reset-form-title" >
            <span class="reset-form-title-1">
                Reset password
            </span>
        </div>
        <!-- Display Session Status -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" class="reset-form validate-form" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
        @csrf
            <div class="wrap-input validate-input" data-validate="Username is required">

                    <span class="label-input">{{ __('E-Mail') }}</span>
                    <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input"></span>
            </div>
            <div class="container-reset-form-btn pt-4">
                <button type="submit" class="reset-form-btn">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>


@endsection
