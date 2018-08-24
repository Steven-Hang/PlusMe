@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row">
            <div class="pickup-location-same">
                <label>Pickup Location</label>
                <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" style="padding: 10px; margin: 10px; width: 300px;" />
            </div>
            <div class="pickup-date-same">
                <label>Pickup Date</label>
                <input type="hidden" value="" />
                <input class="form-control ondemand-typeahead" type="date"  data-provide="typeahead" autocomplete="on" value="" name="pickupdate" style="padding: 10px; margin: 10px; width: 200px;" />
            </div>
            <div class="return-date-same">
                <label>Return Date</label>
                <input type="hidden" value="" />
                <input class="form-control ondemand-typeahead" type="date" data-provide="typeahead" autocomplete="on" value="" name="returndate" style="padding: 10px; margin: 10px; width: 200px;" />
            </div>

            <a href="{{ route('booking') }}" class="btn btn-primary" style="height: 40px;">Edit</a>
    </div>
    <br />
    <br />
    <div class="progress" style="margin: 10px 0">
        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
            <span class="sr-only">25%</span>
        </div>
    </div>
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">afasd</h4>
                <img src="./images/sedan.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ hour</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li><strong>$100</strong> one day maximum!</li>
                <li>asdsfhkjh hjasldha hjasdhl ahsjd</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="location.href='{{ route('booking/step3') }}';">Book Now</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">lksajd</h4>
                <img src="./images/car.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$6  <small class="text-muted">/ hour</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><strong>$100</strong> one day maximum!</li>
                    <li>asdsfhkjh hjasldha hjasdhl ahsjd</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" onclick="location.href='{{ route('booking/step3') }}';">Book Now</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">SUV</h4>
                <img src="./images/suv.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$7 <small class="text-muted">/ hour</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><strong>$100</strong> one day maximum!</li>
                    <li>asdsfhkjh hjasldha hjasdhl ahsjd</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" onclick="location.href='{{ route('booking/step3') }}';">Book Now</button>
            </div>
        </div>
    </div>
    <br >
    <div class="row">
    @include('layouts.partials.footer')
    </div>
</div>
@endsection
