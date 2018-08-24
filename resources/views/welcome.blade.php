<!doctype html>
<html lang="{{ app()->getLocale() }}"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plus Me - A Riding Sharing App</title>
        <!-- Fonts -->  
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #fff;
                font-family: "Lucida Grande", "Helvetica Neue", Roboto, "Droid Sans", Prelude, Helvetica, Arial, sans-serif;
                font-size: 100%;
                color: #334;
	            text-align:center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 72px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 30px;

            #frame {
	            padding-left:20%;
	            padding-Right:20%;
            }

            #googleMap {
	            width:100%;
	            height:400px;

            }

            .button {
                background-color: #ddd;
                border: none;
                color: black;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 16px;
                font-family: Century Gothic;
            }
        </style>
    </head>
    @include('layouts.app')
    <body>
    <div class="jumbotron jumbotron-fluid">

        <h1>Plus Me </h1>
        <p class="lead">insert text here</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

    </div> 

            <div class="container">
                <div class="row">
                    <div class="col col-lg-4">
                        <div class="pickup-location-same">
                            <label>Pickup Location</label>
                            <input type="hidden" value="" />
                            <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" />
                            <button type="button" class="button" >Locate me</button>
                        </div>
                    </div>
                </div>
                
                <div class="col col-lg-4">
                </div>
            
            <div class="row">
            @include('layouts.partials.footer')
            </div>
    </body>

</html>
