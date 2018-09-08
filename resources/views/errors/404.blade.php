<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')

<style>
    html,
    body {
        height: 100%
        background-image: none !important;
        background-color:white !important;
    }
</style>

<body>

<div class="container-fluid">
        
    @include('layouts.partials.nav')
    
    <br><br>
    
    <div class="h-100 row align-items-center">
                
        <div class="col">
            <img src="./css/images/404.gif" width="440px">
        </div>
            
        <div class="col" style="margin: 0; position: fixed; top: 40%; left: 200px;">
            <h2>oOops, page not found 404</h2>
            <p>Back <a href="/">home, you go now.</a></p>
        </div>
        
    </div>
    @include('layouts.partials.footer')
</div>
            
       
    
    </body>
</html>


