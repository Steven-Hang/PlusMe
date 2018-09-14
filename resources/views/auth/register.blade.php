@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity:0.96">
                
                <div class=""></div>
                    <div class="card-body">
                        <h1>Sign Up </h1>
                    <!-- Begin Register form -->
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <!-- First Name -->
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Last Name -->
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- DOB -->
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>

                                @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Contact Number -->
                        <div class="form-group row">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-right">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_number" type="text" class="form-control{{ $errors->has('contact_number') ? ' is-invalid' : '' }}" name="contact_number" value="{{ old('contact_number') }}" pattern="^[\+]?[0-9\s\-\)\(]{8,17}" required autofocus>

                                @if ($errors->has('contact_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- Password -->
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
                        <!-- Password confirm -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <!-- TODO:compare with pwd -->
                        </div>
                        <!-- Driver licence -->
                        <div class="form-group row">
                            <label for="licence_number" class="col-md-4 col-form-label text-md-right">{{ __('Driver licence number') }}</label>

                            <div class="col-md-6">
                                <input id="licence_number" type="text" class="form-control{{ $errors->has('licence_number') ? ' is-invalid' : '' }}" name="licence_number" value="{{ old('licence_number') }}" required autofocus>

                                @if ($errors->has('licence_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('licence_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        
                        <!-- Terms and Condition Checkbox -->
                        <div class="form-group row">
                        <div class="col-md-12">
                        <label for="terms"> I agree to the <a href="#" data-toggle="modal" data-target="#TermsModalLong"> terms of service</a> </label>

                            <div class="col-md-12">
                                <input type="checkbox" class="" name="terms" value="1" class="form-control{{ $errors->has('terms') ? ' has-error' : '' }}" value="{{ old('terms') }}" />

                                 @if ($errors->has('terms'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('terms') }}</strong>
                                  </span>
                                 @endif
                             </div>
                        </div>
                    </div>
                    
                        <!-- register button -->
                        <div class="form-group row" id="">
                            <div id="app" class="col-md-12">
                                    <!-- vuesax file found assets/js/partials/Loading -->
                                    <loading-component></loading-component>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            <!-- End Card  -->
            </div>

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
</div>
@endsection

