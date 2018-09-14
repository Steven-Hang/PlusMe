@include('layouts.partials.head')
<body>
        @include('layouts.partials.nav')
        <main>
            <div id="app">
                @yield('content')
            </div>
        </main>

</body>
</html>
