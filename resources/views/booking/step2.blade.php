@extends('layouts.app')

@section('content')
<div class="container">

    <div class="form-group col-md-12">
            <div class="col pickup-location-same">
                <label class="row">Pickup Location</label>
                <label class="row">Pickup Date - OUTPUT</label>
    
            </div>
            <div class="col pickup-date-same">
                <label class="row">Pickup Date</label>
                <label class="row">Pickup Date - OUTPUT</label>
                <input class="form-control ondemand-typeahead" type="date"  data-provide="typeahead" autocomplete="on" value="" name="pickupdate" style="padding: 10px; margin: 10px; width: 200px;" />
            </div>
            <div class="col return-date-same">
                <label class="row">Return Date</label>
                <label class="row">Return Date - OUTPUT</label>
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
                <h4 class="my-0 font-weight-normal">ADD-ON THREE</h4>
                <img src="./images/sedan.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$50</h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li><strong>$X</strong>ADD TOLL PASS</li>
                <li>need to use the fast lane? add a toll pass at a discounted price</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="location.href='{{ route('booking/step3') }}';">Book Now</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">ADD-ON TWO</h4>
                <img src="./images/car.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$60</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><strong>$X</strong>ADD INSURANCE</li>
                    <li>Drive Safe, if not? we got you covered</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary" onclick="location.href='{{ route('booking/step3') }}';">Book Now</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">ADD-ON THREE</h4>
                <img src="./images/suv.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$70</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><strong>$100</strong> ADD OPTION HERE</li>
                    <li>DUMMY TEXT</li>
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
