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
            <img class="rounded-circle my-4" id="profilepic" src="/storage/avatars/{{$userprofile}}" width="50px" height="50px">
        </li>
        <li>
            <p class="mt-2 infolabel">Price</p><div id="priceField"><p id="hoursField" name="hoursField"></p></div>
        </li>
        <li>
            <p class="infolabel">Selected Car Type </p><div id="carTypeField"><p id="carType" name="carType"></p></div>
        </li>
        <p class="infolabel">Selected Location </p><div id="locationField"><p id="info" class="info"></p></div>
        <p>Nearest Parking Locations</p>

    </ul>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row mb-2 mapSerBar">

            <div class="col-md-4 search-container ">
                <input class="border py-2 px-1" id="pac-input" type="text" placeholder="Please enter a location....." name="search" size=30px;>

                <input type="hidden" id="startDateField" name="">
                <input type="hidden" id="endDateField" name="">

            </div>
            <div class="col-md-8 bookForm">
                <form id="booking_form" method="POST" action="{{ route('booking.process')}}" class="bookForm">
                    @csrf
                        Start Date: <input class="border py-2 px-1" type="date" placeholder="Start Time....." id="startDate" name="start_date" onchange="updateStartDate()" Required>
                        End Date:<input class="border py-2 px-1" type="date" placeholder="End Time......" id="endDate" name="end_date" onchange="calcHours()" Required>
                        <input type="hidden" id="location_id" name="location_id">
                        <button type="submit" id="submitBooking" name="submitBooking"  class="btn btn-dark">Book</button>
                </form>
            </div>
        </div>
         <!-- Show if User Has Active Booking -->
        @if($UserActiveBooking)
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ExtendModalCenter">Extend Your Booking </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#EndModalCenter">End Your Booking </button>



            <!-- ExtendModal -->
            <div class="modal fade" id="ExtendModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Extend Your Booking</h5>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Thank you</button>
                    <button type="button" class="btn btn-primary">Yes, Please extend my booking.</button>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, I change my mind</button>
                    <a href="{{ route('booking.end')}}" type="button" class="btn btn-primary">Yes, Please End my Booking.</a>
                </div>
                </div>
            </div>
            </div>

            <p> Booking Duration Left (In-Hours): </p>

        @endif
        <div>
            <!-- display the google map -->
            @include('layouts.partials.map')
        </div>
    </main>
</div>
<!-- /#wrapper -->



@endsection
