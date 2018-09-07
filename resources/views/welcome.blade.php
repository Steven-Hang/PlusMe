@extends('layouts.app')

@section('content')
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="{{URL::asset('css/images/Blurred Bokeh Video.mp4')}}" type="video/mp4">
    </video>
    <div class="content">
        <h1>Plus Me </h1>
        <p class="lead">insert text here</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

        <div class="row">
            <div class="col col-lg-4">
                <div class="pickup-location-same">
                    <label>Pickup Location</label>
                    <input type="hidden" value="" />
                    <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" />
                    <button type="button" class="button" >Locate me</button>
                </div>
            </div>
        </div>
    </div>
@endsection
