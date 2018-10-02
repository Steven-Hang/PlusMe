@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wrapper">
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
        @endforeach 
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <p><strong>car</strong><br>type:{{$pastBookings->start_date}}<br>pick up:<br>return:{{$pastBookings->end_date}}<br>Payment:</p>
            </div>
        </div>
        
        
        <div class="panel panel-default">
             <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">06/07/2018 booking id:aksjdhiy12</a>
                </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>car</strong><br>type:<br>pick up:<br>return: <br>Payment:</p>
        </div>
    
    </div><!-- end wrapper -->
</div> <!-- end container -->


@include('layouts.partials.footer')
@endsection

