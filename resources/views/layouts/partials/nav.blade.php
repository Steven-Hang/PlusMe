<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid px-0">
        <!-- Left Side Of Navbar -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/css/images/logo.png" width="40" height="40" alt="">
            <img src="/css/images/plusme.png" height="44" alt="PlusMe Car Share">
        </a>

        <!-- Right Side Of Navbar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <!--Login and Registration links if guest -->
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('register') }}">Register</a>
                </li>
                @else


                <!-- First Name of the user -->
                <li class="nav-item">
                    <a class="nav-link mx-2" href="/dashboard" >
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('user.show', Auth::user()->id) }}">Profile</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link mx-2" href="/messages">
                        Messages @include('messenger.unread-count')
                    </a>
                </li>
                 <!-- Logout of the user -->
                 <li class="nav-item">
                    <a class="nav-link mx-2" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                </li>
                <form class="form-inline" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endguest
            </ul>
        </div>
    </div>
</nav>
