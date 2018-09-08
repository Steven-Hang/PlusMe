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
                <div class="col-4" style="margin: 0; position: absolute; top: 40%; left: 50%;">
                    <h2>ooops, page not found</h2>
                    <p>
                        Back to <a href="">homepage</a>
                    </p>
                </div>
                </div>
            </div>

            @include('layouts.partials.footer')
        </main>
    </div>
</body>
</html>


