@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2 class="pb-3 border-bottom border-light">My Booking History</h2>
            <div id="bookingList">
                <h3> Active Booking </h3>
                 @foreach($activeBooking as $activeBooking)
                <div class="card">
                    <div class="card-header">
                            Booking ID: {{$activeBooking->id}}
                    </div>
                    <div class="card-body">
                            <p><strong>cartype:  </strong><br>Booked Date: {{$activeBooking->location_id['id']}} {{$activeBooking->start_date}}<br>Return Date:{{$activeBooking->end_date}} <br> Price of Trip: ${{$activeBooking->price}}<br> Pick-up Location ID: {{$activeBooking->location_id}} <br> Return Confirmed: @if($returned == "1")<p>Yes</p> @else <p> No </p> @endif </p>
                    </div>
                </div>
                @endforeach
                <br>
                <h3> Past Bookings </h3>
                @foreach($pastBooking as $pastBookings)
                <div class="card" id="accordion">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapse">
                            Booking ID: {{$pastBookings->id}}
                    </a>
                    </div>
                    <div id="collapse" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p><strong>cartype: </strong><br>Booked Date: {{$pastBookings->location_id['id']}} {{$pastBookings->start_date}}<br>Return Date:{{$pastBookings->end_date}} <br> Price of Trip: ${{$pastBookings->price}}<br> Pick-up Location ID: {{$pastBookings->location_id}} <br> Return Confirmed: @if($returned == "1")<p>Yes</p> @else <p> No </p> @endif </p>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>








        </main>

    </div>
    <!-- /#wrapper -->

</body>

</html>

