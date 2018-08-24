<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/favicon.png" width="30" height="30" alt="">
                    PlusMe
                </a>
                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            <!--Login and Registration links if guest -->
                            <a class="" href="{{ route('login') }}">Login</a>
                            <a class="" href="{{ route('register') }}">Register</a>
                        @else 
                        <!--Logout -->
                        <a id="" class="" href="" >
                                {{ Auth::user()->first_name }} <span class="caret"></span></a>

                            <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                         @endguest
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
