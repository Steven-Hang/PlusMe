@extends('layouts.app')

@section('content')
<div class="container">

        <div class="wrapper">
        @include('layouts.partials.sidebar')
    <h2>My Booking History</h2>
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">15/08/2018 booking id:12390982</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p><strong>car</strong><br>type:<br>pick up:<br>return: Not returned yet<br>Payment:</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">15/07/2018 booking id:123834y987</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <p><strong>car</strong><br>type:<br>pick up:<br>return:<br>Payment:</p>
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
        </div>
    </div>

        </div>
    </div>
        </div>
    @include('layouts.partials.footer');
</div>
@endsection
