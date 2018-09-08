<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    <style>
        body {
            background-image: none !important;
            background-color:white !important;
        }
    </style>
</head>
<body>
    <div id="app">
            @include('layouts.partials.nav')
        <main>
            <div class = "container">
                <br>
                <div class="row">
                    <div class="col-8">
                        <img src="./css/images/404.gif" width="440px">
                    </div>
                    <div class="col-4" style="margin-top: 10%; text-shadow: -2px -2px 0 white,2px -2px 0 white,-2px 2px 0 white,2px 2px 0 white;">
                        <h2>ooops, page not found</h2>
                    </div>
                </div>
            </div>

            @include('layouts.partials.footer')
        </main>
    </div>
</body>
</html>


