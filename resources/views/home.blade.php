@extends('layouts.app')
<style>
    .main-container {
        min-height: 100vh; /* will cover the 100% of viewport */
        overflow: hidden;
        display: block;
        position: relative;
    }
</style>
@section('content')

<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav navbar-light bg-white">
        <li  style="border-bottom: 1px solid rgb(222,226,230);">
        @if($userprofile = "profile.png")
            <img class="rounded-circle my-4" id="profilepic" src="../storage/avatars/{{$userprofile}}"  alt="profile picture" width="50px" height="50px">
        @else
            <img class="rounded-circle my-4" id="profilepic" src="{{$userprofile}}"  alt="profile picture" width="50px" height="50px">
        @endif
        </li>
        <li>
            <p class="mt-2 infolabel">Price</p><div id="priceField"><p id="hoursField" name="hoursField"></p></div>
        </li>
        <li>
            <p class="infolabel">Selected Car Type </p><div id="carTypeField"><p id="carType" name="carType"></p></div>
        </li>
        <p class="infolabel">Selected Location </p><div id="locationField"><p id="info" class="info"></p></div>
        <p>Nearest Parking Locations</p>
        <div id="locations-near-you"></div>

    </ul>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row mb-2 mapSerBar">

            <div class="col-lg-2 search-container">
                <input class="border py-1 px-1 my-1  mx-2" id="pac-input" type="text" placeholder="Please enter a location....." name="search">
                <input type="hidden" id="startDateField" name="">
                <input type="hidden" id="endDateField" name="">
            </div>
            <div class="col-lg-10 bookForm">
                <form method="POST" action="{{ route('booking.process')}}" class="bookForm">
                    @csrf
                    <span>Start-Date: <input class="border py-1 px-1 my-1 mx-2" type="date" placeholder="Start Time....." id="startDate" name="start_date" onchange="updateStartDate()" requried></span>
                    <span>End-Date:<input class="border py-1 px-1 my-1 mx-2" type="date" placeholder="End Time......" id="endDate" name="end_date" onchange="calcHours()" requried></span>
                    <input type="hidden" id="location_id" name="location_id"/>
                    <span><button class="px-4 py-1 mx-2" type="submit" id="submitBooking" name="submitBooking">Book</button></span>
                </form>
            </div>
        </div>
         <!-- Show if User Has Active Booking -->
        @if($UserActiveBooking)
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ExtendModalCenter">Extend Your Booking </button>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#EndModalCenter">End Your Booking </button>


            <!-- ExtendModal -->
            <div class="modal fade" id="ExtendModalCenter" tabindex="-1" role="dialog" aria-labelledby="ExtendModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ExtendModalLongTitle">Extend Your Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p>Start Date: {{$UserActiveBooking->start_date}} </p>
                <p>Please enter your new end date</p>

                <form  action="{{ route('booking.extend')}}">
                    <input type="date" value="{{$UserActiveBooking->end_date}}" />
                </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">No, Thank you</button>
                    <button type="button" class="btn btn-dark">Yes, Please extend my booking.</button>
                </div>
                </div>
            </div>
            </div>
            <!-- End Modal -->
            <div class="modal fade" id="EndModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">No, I change my mind</button>
                    <a href="{{ route('booking.end')}}" type="button" class="btn btn-dark">Yes, Please End my Booking.</a>
                </div>
                </div>
            </div>
            </div>


            <p> Booking Duration Left (In-Hours):@if($startDate > $dt) <p> Booking Not Yet Started </p> @else <p> {{$durationleft}}  @endif</p>



            <script>
            $( "#submitBooking" ).prop( "disabled", true );
            </script>
            @else
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour-standalone.min.js"></script>
            <link href="../css/bootstrap-tour-standalone.min.css" rel="stylesheet">
        @endif
        <div>
            <!-- display the google map -->
            @include('layouts.partials.map')
        </div>
    </main>
</div>
<!-- /#wrapper -->

<script>

// Instance the tour
var tour = new Tour({
  steps: [
  {
    element: "#profilepic",
    title: "Title of my step",
    content: "Hi and Welcome to the PlusMe Car Sharing service"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();
tour.exit();
</script>

@endsection
