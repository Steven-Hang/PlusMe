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
    <ul class="sidebar navbar-nav navbar-light bg-white" id="sidebar">
        <li  style="border-bottom: 1px solid rgb(222,226,230);">
            <img class="rounded-circle my-4" id="profilepic" src="../storage/avatars/{{$userprofile}}"  alt="profile picture" width="50px" height="50px">
        </li>
        <!-- Show if User Has Active Booking -->
        @if($UserActiveBooking)
        <!-- Button trigger modal -->
        <h5 class="my-2"><strong>You current booking </strong></h5>
        <p> Duration Left (In-hours):@if($startDate > $dt) <p> Booking Not Yet Started </p> @else <p> {{$durationleft}}  @endif</p>
        <button type="button" class="login-form-btn mb-2" data-toggle="modal" data-target="#ExtendModalCenter">Extend Your Booking </button>
        <button type="button" class="login-form-btn mb-2" data-toggle="modal" data-target="#EndModalCenter">End Your Booking </button>

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
                <button type="button" class="login-form-btn" data-dismiss="modal">No, Thank you</button>
                <button type="button" class="login-form-btn">Yes, Please extend my booking.</button>
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
                    <button type="button" class="login-form-btn" data-dismiss="modal">No, I change my mind</button>
                    <a href="{{ route('booking.end')}}" type="button" class="login-form-btn">Yes, Please End my Booking.</a>
                </div>
                </div>
            </div>
        </div>
        <hr>
        <script>
        $( "#submitBooking" ).prop( "disabled", true );
        </script>
        @else
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour-standalone.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour-standalone.min.css" />
        @endif
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
            <div class="bookingForm">
                <form method="POST" action="{{ route('booking.process')}}" class="bookForm">
                    @csrf
                    <div class="row no-margin">
                        <div class="col-md-4">
                            <div class="form-group">
                                <span class="form-label">Location</span>
                                <input class="form-control" id="pac-input" type="text" placeholder="Country, ZIP, city..." name="search">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row no-margin">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Start date</span>
                                        <input class="form-control" type="date" id="startDate" name="start_date" onchange="updateStartDate()" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">End date</span>
                                        <input class="form-control" type="date" id="endDate" name="end_date" onchange="calcHours()" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1  my-auto">
                                <button class="px-4 py-3" type="submit" id="submitBooking" name="submitBooking">Book</button>

                        </div>
                    </div>
                    <input  type="hidden" id="startDateField">
                    <input  type="hidden" id="endDateField">
                    <input type="hidden" id="location_id" name="location_id"/>
                </form>
            </div>
        </div>

        <div>
            <!-- display the google map -->
            @include('layouts.partials.map')
        </div>
    </main>
</div>
<!-- /#wrapper -->
<style>
    .mapSerBar input{
        border-radius: 20px !important;
    }
    @media screen and (max-width:750px){
        #wrapper{
            flex-wrap:wrap;
        }
        .sidebar{
            width:100% !important;
            min-height:0 !important;
            margin-bottom: 60px;
        }
        .bookForm input{
            margin-bottom: 10px !important;
        }
        .search-container{
            margin-bottom: 10px;
        }
    }
</style>
<script>
// Instance the tour
var tour = new Tour({
    backdrop: true,
  steps: [
  {
    element: "#profilepic",
    title: "Welcome",
    content: "Hi and Welcome to the PlusMe Car Sharing service.",
    placement: "right"
  },
  {
    element: "#startDate",
    title: "Start date",
    content: "Please select start date you would like to pick up the car.",
    placement: "bottom"
  },
  {
    element: "#endDate",
    title: "End date",
    content: "Please select end date you would like to return the car.",
    placement: "bottom"
  },
  {
    element: "#map",
    title: "Pick up location",
    content: "Please select the pick-up parking lot by clicking on the parking lot icon on the map.",
    placement: "top"
  },
  {
    element: "#sidebar",
    title: "Booking info",
    content: "You can see the details of your booking here!",
    placement: "right"
  },
  {
    element: "#submitBooking",
    title: "Book now",
    content: "One last step ! Click on the book button to proceed your booking.",
    placement: "bottom"
  }
]});

// Initialize the tour
tour.init();

// Start the tour
tour.start();
</script>
@endsection
