@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Masthead -->
    <header class="text-white text-center">
        <div class="container-video">
            <!-- The background video -->
            <video autoplay muted loop id="bg-video">
                <source src="./css/images/plusme.mp4" type="video/mp4">
            </video>
            <!-- overlay content to the video -->
            <div class="overlay-video">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5" style="font-size:2rem">Slogan here!</h1>
                </div>
                <div id="welcome-btn" class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <div id="app" class="col-md-12">
                            <!-- vuesax file found assets/js/partials/Loading -->
                            <Welcome-Button></Welcome-Button>
                        </div>
                </div>
                <a href="#iconsGrid"><img id="gotonext" src="./css/icons/godown.png" width=40px></a>
            </div>
        </div>
    </header>
    <a href="#" id="backtotop"><img src="./css/icons/backtotop.png" width=40px></a>
    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center" id="iconsGrid">
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                    <img src="./css/images/maps.PNG" width=100px height=100px>
                </div>
                <h3>Real time tracking</h3>
                <p class="lead mb-0">Google maps joasd hjds ajkasd jklasd jka jksd. asdhjl!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                        <img src="./css/images/multipledevices.png" width=100px height=100px>
                </div>
                <h3>Platform independent</h3>
                <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mt-5 mb-5">
                <div class="features-icons-icon">
                        <img src="./css/images/creditcard.png" width=100px height=100px>
                </div>
                <h3>Easy payment</h3>
                <p class="lead mb-0">Master card, credit card, visa hajlshd asjkdl jkdfkks ads asd!</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('./css/images/mapcapture.PNG');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Real time tracking</h2>
                    <p class="lead mb-0">Google maps joasd hjds ajkasd jklasd jka jksd. asdhjl!</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('./css/images/devices.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Fully Responsive Design</h2>
                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                </div>
            </div>
                <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('./css/images/cards.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Easy payment</h2>
                    <p class="lead mb-0">Master card, credit card, visa hajlshd asjkdl jkdfkks ads asd!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <a class="btn btn-lg btn-warning" href="{{ route('register') }}">Sign Up Now!</a>
                </div>
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


