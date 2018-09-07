<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
            @include('layouts.partials.nav')
        <main>
            @yield('content')

            @include('layouts.partials.footer')
        </main>
    </div>
</body>
</html>
