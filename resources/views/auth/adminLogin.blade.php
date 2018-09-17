@include('layouts.partials.head')

	<style>

        .forgot {
            font-size: 15px;
            color:orange;
            line-height: 1.5;
        }

        /*---- login ----*/

        .container-Login {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: #fff;
        }

        .wrap-Login {
        width: 390px;
        background: #fff;
        }


        /*---- Form ----*/

        .Login-form {
        width: 100%;
        }

        .Login-form-title {
        display: block;
        font-size: 32px;
        color: #333333;
        line-height: 1.2;
        text-align: center;
        margin: 10px;
        }

        /*---- Input ----*/

        .wrap-input {
        width: 100%;
        position: relative;
        border-bottom: 2px solid #d9d9d9;
        }

        .input {
        font-size: 18px;
        color: #555555;
        line-height: 1.2;

        display: block;
        width: 100%;
        height: 52px;
        background: transparent;
        padding: 0 5px;
        margin-top: 30px;
        }

        /*----focus input----*/
        .focus-input {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        }

        .focus-input::before {
        content: "";
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;

        background: #ff8f3a;
        }

        .focus-input::after {
        font-size: 18px;
        color: #999999;
        line-height: 1.2;

        content: attr(data-placeholder);
        display: block;
        width: 100%;
        position: absolute;
        top: 15px;
        left: 0px;
        padding-left: 5px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        }

        .input:focus + .focus-input::after {
        top: -20px;
        font-size: 15px;
        }

        .input:focus + .focus-input::before {
        width: 100%;
        }

        .has-val.input + .focus-input::after {
        top: -20px;
        font-size: 15px;
        }

        .has-val.input + .focus-input::before {
        width: 100%;
        }


        /*---- Button ----*/
        .container-Login-form-btn {
        width: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        .Login-form-btn {
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        width: 100%;
        height: 50px;
        background-color: #ff8f4f;
        border-radius: 25px;

        box-shadow: 0 10px 30px 0px rgba(255, 171, 68, 0.5);
        -moz-box-shadow: 0 10px 30px 0px rgba(226, 143, 83, 0.5);
        -webkit-box-shadow: 0 10px 30px 0px rgba(255, 171, 68, 0.5);
        -o-box-shadow: 0 10px 30px 0px rgba(226, 143, 83, 0.5);
        -ms-box-shadow: 0 10px 30px 0px rgba(255, 171, 68, 0.5);

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        }

        .Login-form-btn:hover  {
        background-color: #333333;
        box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        -moz-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        -webkit-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        -o-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        -ms-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
        }

        .login-more{
        position: relative;
        padding-left: 16px;
        margin: 10px;
        }

        .validate-input {
        position: relative;
        }

        .alert-validate::before {
        content: attr(data-validate);
        position: absolute;
        max-width: 70%;
        background-color: #fff;
        border: 1px solid #c80000;
        border-radius: 2px;
        padding: 4px 25px 4px 10px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 0px;
        pointer-events: none;

        color: #c80000;
        font-size: 13px;
        line-height: 1.4;
        text-align: left;

        visibility: hidden;
        opacity: 0;

        -webkit-transition: opacity 0.4s;
        -o-transition: opacity 0.4s;
        -moz-transition: opacity 0.4s;
        transition: opacity 0.4s;
        }

        .alert-validate::after {
        content: "\f06a";
        font-size: 16px;
        color: #c80000;

        display: block;
        position: absolute;
        background-color: #fff;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 5px;
        }

        .alert-validate:hover:before {
        visibility: visible;
        opacity: 1;
        }

        @media (max-width: 992px) {
        .alert-validate::before {
            visibility: visible;
            opacity: 1;
        }
        }
    </style>
</head>
<body>
    <div class="container-Login">
        <div class="wrap-Login">
            <div>
                @if(Session::has('flash_message_error'))
                <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                @endif
                @if(Session::has('flash_message_logout'))
                <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! session('flash_message_logout') !!}</strong>
                @endif
            </div>
            <form method="POST" action="{{ route('adminLogin') }}" aria-label="{{ __('Login') }}" class="Login-form">
                <a class="logo" href="{{ url('/') }}">
                    <img src="/css/images/orangelogo.png" width="50" height="50" alt="">
                </a>
                <span class="Login-form-title">
                    PlusMe Admin Login
                </span>
                @csrf
                <div class="wrap-input validate-input" data-validate = "Enter email">
                    <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    <span class="focus-input" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input validate-input" data-validate="Enter password">
                    <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    <span class="focus-input" data-placeholder="Password"></span>
                </div>


                <div class="login-more">
                    <a class="forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                    </div>
                </div>
                <div class="container-Login-form-btn">
                    <button type="submit" class="Login-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
