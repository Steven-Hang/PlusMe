


<nav class="navbar navbar-expand-md navbar-light bg-light" style="height: 60px">
    <div class="container-fluid">
            <!-- Left Side Of Navbar -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/css/images/orangelogo.png" width="40" height="40" alt="">
                <img src="/css/images/plusme.png" height="30" alt="PlusMe Car Share">
            </a>

            <!-- Right Side Of Navbar -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                <!--Login and Registration links if guest -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                </li>

                @else
        
                <!-- First Name of the user -->
                <li class="nav-item">
                    <a class="nav-link" href="/home" >
                            {{ Auth::user()->first_name }} <span class="caret"></span></a>
                </li>
                <!-- Logout of the user -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>
                </li>
            <form class="form-inline" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
            </form>

            <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">Profile</a>
            <a class="nav-link" href="{{ route('booking/step2')}}">BOOK!</a>
            @endguest
    </div>
</nav>
