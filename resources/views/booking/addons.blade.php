@extends('layouts.app')
<style>
    .container{
        padding-top: 0;
    }
    .list-unstyled{
        min-height: 124px;
    }
</style>
@section('content')
<div class="container">
    <h1> Review and Add-on </h1>
    <div class="form-group col-md-12">

            <div class="col pickup-location-same">
                <label class="row">Pickup Location: {{$locationAddress->address}}</label>
                <label class="row"></label>
            </div>
            <div class="col pickup-date-same">
                <label class="row">Start Date: {{$start_date}}</label>
            </div>
            <div class="col return-date-same">
                <label class="row">Return Date: {{$end_date}}</label>
            </div>
            <div class="col price-same">
                <label class="row">Price: ${{$price}}</label>
            </div>

    <form  method="POST" {{ route('booking.payment')}}">
        <input type="hidden" name="price" value="{{$price}}"/>
        <button type="submit" id="submitBooking" height=66px width=200px>Proceed to Payment</button>
    </form>
    </div>
    <br />
    <br />
    <div class="progress" style="margin: 10px 0;">
        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
            <span class="sr-only">25%</span>
        </div>
    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">TOLL PASS</h4>
                <img src="./images/sedan.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$50</h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>ADD TOLL PASS</li>
                <li>need to use the fast lane? add a toll pass at a discounted price</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">INSURANCE</h4>
                <img src="./images/car.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$60</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>ADD INSURANCE</li>
                    <li>Drive Safe, if not? we got you covered</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">TOLL PASS</h4>
                <img src="./images/suv.jpg" class="img" >
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$70</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                    <li>Baby on Board, We're on board!</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection
