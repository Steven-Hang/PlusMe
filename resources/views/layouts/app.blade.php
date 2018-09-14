@include('layouts.partials.head')
<body>
        @include('layouts.partials.nav')
        <main>
            <div class="app">
            @yield('content') 
            </div>
        </main>
       
</body>
</html>
