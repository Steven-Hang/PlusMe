@extends('layouts.app')

@section('content')
<div class="container">
        <div class="wrapper">

                @include('layouts.partials.sidebar')
                <div class="form-group row">
                        <div class="col-sm-4">
                            <div class="pickup-location-same">
                                <label>Pickup Location</label>
                                <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" style="padding: 10px; margin: 10px;" />
                                <button type="button" class="button" >Locate me</button>
                            </div>
                        </div>
                    <br>
                        <div class="col-sm-3">
                            <div class="pickup-date-same">
                                <label>Pickup Date</label>
                                <input class="form-control ondemand-typeahead" type="date"  data-provide="typeahead" autocomplete="on" value="" name="pickupdate" style="padding: 10px; margin: 10px;" />

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="return-date-same">
                                <label>Return Date</label>
                                <input class="form-control ondemand-typeahead" type="date" data-provide="typeahead" autocomplete="on" value="" name="returndate" style="padding: 10px; margin: 10px;" />
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-2">
                            <button type="button" class="button" >Search</button>
                        </div>
                    </div>
                    <br><br>


        </div>
        <div class="form-group row">
                <div class="col-sm-10">
                    <img src="./images/fakemap.png" class="img" alt="Map" width="80%" >
                </div>
                <div class="col-sm-2">
                        <a href="{{ route('booking/step2') }}"><strong>Book</strong></a>
                </div>
        </div>


    @include('layouts.partials.footer')
</div>

@endsection
