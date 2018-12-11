@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="faq-masthead">
    <h1>About PlusMe CarShare</h1>
</header>
<style>
        * {box-sizing: border-box}
        body {font-family: Arial, Helvetica, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 800px;
          position: relative;
          margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          top: 50%;
          padding: 136px;
          color: #ffff0000;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(255, 255, 255, 0);
        }

        /* Caption text */
        .text {
          color: #000000;
          font-size: 15px;
          padding: -25px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
          background-color: #717171;
        }



        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>
<!-- content -->

<div class="slideshow-container">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="./css/images/TrollNew.jpg"  width: 700px height="400px">
          <div class="text">The whole development team</div>
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="./css/images/suv.jpg" width: 700px height="400px">
          <div class="text">SUV</div>
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="./css/images/sedan.jpg" width: 700px height="400px">
          <div class="text">Sedan</div>
        </div>

        <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="./css/images/hatchback.jpg" width: 700px height="400px">
                <div class="text">Hatchback</div>
              </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>

<div class='container'>
    <section class="my-5 mx-auto" id="about">
        <h3 class="text-justify">It started as a simple idea: What if you could rent a vehicle when every you like and wherever you are? PlusMe's vision is to be the best car rental company in Australia, offering our customers the ‘best’ service, the ‘best’ rates and the ‘best’ experience, so when someone think of renting a vehicle the first think in their mind will be PlusMe. Our friendly, professional team understands your rental needs. You might be after an; economical car, 4WD, family sedan, luxury car, a bus, van or truck etc we can rent every kind of vehicles to you. At PlusMe, we're always happy to help you choose the right passenger or commercial vehicle. So, from the moment you walk through the doors to the time you drive away, in one of our rental cars, you can expect great personal service all the way.</h3>
    </section>
    <section id="team" class="my-5">
        <h2 style="color:#ff9d41;">Our Development Team</h2>
        <div class="row mt-5">
            <div class="col-lg-8">
                <img src="./css/images/team_troll.jpg" width="550" height="400">
            </div>
            <div class="col-lg-4 py-auto text-justify">
                <p>This is our development team, it's a group of five. Its a good team, lots of fun and shout out milk teas from  the guy with the 'V' post.</p>
            </div>
        </div>
    </section>

    <section id="feedback">
        <h2 style="color:#ff9d41;">We are always happy to hear feedbacks</h2>
        <p class="text-justify">We welcome your suggestions and ideas. With over a billion people on Facebook, feedback from community members like you helps us as we constantly improve our features and services. Though we can't respond to everyone who submits feedback, we review many of the ideas people send us to improve the PlusMe CarShare experience for everyone. We may use feedback or suggestions submitted by the community without any restriction or obligation to provide compensation for them or keep them confidential.</p>
    </section>
</div>

<script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
@endsection
