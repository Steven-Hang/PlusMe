@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2>My Booking History</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2> Active Booking </h2>
                                <h4 class="panel-title">
                                @foreach($activeBooking as $activeBooking)
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">{{$activeBooking->id}}</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                        <p><strong>car</strong><br>type:<br>pick up:<br>return: Not returned yet<br>Payment:</p>

                    </div>
                    @endforeach

            <h2> Booking History </h2>

            @foreach($pastBooking as $pastBookings)
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">{{$pastBookings->id}}</a>
                        </h4>
                    </div>
           
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>car</strong><br>type:{{$pastBookings->start_date}}<br>pick up:<br>return:{{$pastBookings->end_date}}<br>Payment:</p>
                </div>
            </div>
            @endforeach
        </main>

    </div>
    <!-- /#wrapper -->

</body>

</html>

