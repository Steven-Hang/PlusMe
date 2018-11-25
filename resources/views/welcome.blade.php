@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Masthead -->
    <header class="text-white text-center">
        <div class="container-video">
            <!-- The background video -->
            <video autoplay loop id="bg-video">
                <source src="../css/images/plusme.mp4" type="video/mp4">
            </video>
            <!-- overlay content to the video -->
            <div class="overlay-video">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5" style="font-size:2rem">Welcome to the easiest and greatest car sharing system.</h1>
                </div>
                <a href="#iconsGrid"><img id="gotonext" src="../css/icons/godown.png" width=40px></a>
            </div>
        </div>
    </header>
    <a href="#" id="backtotop"><img src="../css/icons/backtotop.png" width=40px></a>
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" id="iconsGrid">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                    <img src="./css/images/maps.png">
                </div>
                <h3>Real time tracking</h3>
                <p class="lead mb-0">No matter where you are, we can keep in touch!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                        <img src="./css/images/multipledevices.png">
                </div>
                <h3>Platform independent</h3>
                <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                        <img src="./css/images/creditcard.png">
                </div>
                <h3>Easy payment</h3>
                <p class="lead mb-0">Master card, credit card, anything you want!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" id="showcase-img-1" style="background-image: url('./css/images/mapcapture.png');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Real time tracking</h2>
                    <p class="lead mb-0">Anywhere and everywhere life takes you, let PlusMe take you there! Every step of the way.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" id="showcase-img-2" style="background-image: url('./css/images/devices.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>We Cater to All Devices</h2>
                    <p class="lead mb-0">We work on any device, phone, tablet or desktop computer!</p>
                </div>
            </div>
                <div class="row no-gutters">
                <div class="col-lg-12 order-lg-1 my-auto showcase-text">
                    <h2>5 Star Services</h2>
                     <p class="lead mb-0">See why we are rated the best <a href="#">Learn more ></a></p>
                    <img src="./css/images/5-stars.png" height="175px" width="300px">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h2 class="mb-4">Ready to get started? <a id="signuplink" href="{{ route('register') }}" >Sign up now!</a></h2>
                </div>
            </div>
    </section>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backtotop").style.display = "block";
            } else {
                document.getElementById("backtotop").style.display = "none";
            }
        }
    </script>

@endsection


