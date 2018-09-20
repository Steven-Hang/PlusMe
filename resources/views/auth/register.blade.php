@extends('layouts.app')

@section('content')
<div class="container-register">
    <div class="wrap-register">
        <div class="register-form-title">
            <span class="register-form-title-1">
                Sign up to PlusMe
            </span>
        </div>

        <form method="POST" class="register-form validate-form" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
             @csrf
             <!-- First Name -->
            <div class="wrap-input validate-input" data-validate="Firstname is required">
                    <span class="label-input">{{ __('First name') }}</span>
                    <input id="first_name" type="text" class="input form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input"></span>
            </div>

            <!-- Last Name -->
            <div class="wrap-input validate-inputs" data-validate = "Lastname is required">
                <span class="label-input">{{ __('Last name') }}</span>
                <input id="last_name" type="text" class="input form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- DOB -->
            <div class="wrap-input validate-inputs" data-validate = "Date of Birth is required">
                <span class="label-input">{{ __('Date of Birth') }}</span>
                <input id="date_of_birth" type="date" class="input form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>
                @if ($errors->has('date_of_birth'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- Contact Number -->
            <div class="wrap-input validate-inputs" data-validate = "Contact Number is required">
                <span class="label-input">{{ __('Contact Number') }}</span>
                <input id="contact_number" type="text" class="input form-control{{ $errors->has('contact_number') ? ' is-invalid' : '' }}" name="contact_number" value="{{ old('contact_number') }}" pattern="^[\+]?[0-9\s\-\)\(]{8,17}" required autofocus>
                @if ($errors->has('contact_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('contact_number') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- Email -->
            <div class="wrap-input validate-inputs" data-validate = "Email is required">
                <span class="label-input">{{ __('E-Mail Address') }}</span>
                <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- Password -->
            <div class="wrap-input validate-inputs" data-validate = "Email is required">
                <span class="label-input">{{ __('Password') }}</span>
                <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- Confirm Password -->
            <div class="wrap-input validate-inputs" data-validate = "Password doesn't match">
                <span class="label-input">{{ __('Confirm Password') }}</span>
                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required>
                <!-- TODO:compare with pwd -->
                <span class="focus-input"></span>
            </div>

            <!-- Driver licence -->
            <div class="wrap-input validate-inputs" data-validate = "Driver licence number is required">
                <span class="label-input">{{ __('Driver licence No.') }}</span>
                <input id="licence_number" type="text" class="input form-control{{ $errors->has('licence_number') ? ' is-invalid' : '' }}" name="licence_number" value="{{ old('licence_number') }}" required autofocus>
                @if ($errors->has('licence_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('licence_number') }}</strong>
                    </span>
                @endif
                <span class="focus-input"></span>
            </div>

            <!-- Terms and Condition Checkbox -->
            <div class="contact-form-checkbox">
                <input type="checkbox" name="terms" id="terms" class="input-checkbox form-control{{ $errors->has('terms') ? ' has-error' : '' }}" value="1" />
                <label class="label-checkbox" for="terms">
                        I agree to the <a href="#" id="termslink" data-toggle="modal" data-target="#TermsModalLong"> terms of service</a>
                    </label>
                @if ($errors->has('terms'))
                <span class="help-block">
                    <strong>{{ $errors->first('terms') }}</strong>
                </span>
                @endif
            </div>

            <!-- register button -->
            <div class="container-register-form-btn my-4">
                    <div id="app" class="col-md-12">
                        <!-- vuesax file found assets/js/partials/Loading -->
                        <loading-component></loading-component>
                    </div>
            </div>
        </form>
        <!-- Modal (the thing that pops up when you click terms of service) -->
        <div class="modal fade" id="TermsModalLong" tabindex="-1" role="dialog" aria-labelledby="TermsLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TermsLongTitle">TERMS OF SERVICE ---- OVERVIEW</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('general.terms')
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">I Understand</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
