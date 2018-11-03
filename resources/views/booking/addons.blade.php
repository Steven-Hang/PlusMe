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
    <h1 class="mb-4 pb-2 border-bottom"> Review and Add-on </h1>
    <div class="form-group col-md-12">
        <div id="bookinginfo">
            <div class="col pickup-location-same">
                <label class="row">Pickup Location: <strong> {{$locationAddress->address}}</strong></label>
            </div>
            <div class="col pickup-date-same">
                <label class="row">Start Date: <strong> {{$start_date}}</strong></label>
            </div>
            <div class="col return-date-same">
                <label class="row">Return Date: <strong> {{$end_date}}</strong></label>
            </div>
            <div class="col price-same">
                <label class="row">Price: <strong>  ${{$price}}</strong></label>
            </div>
            <div id="addons">
            </div>
        </div>

    <form  method="POST" action="{{ route('booking.payment')}}">
    @csrf
        <input type="hidden" name="price" value="{{$price}}"/>
        <button type="submit" id="submitBooking" class="px-4 py-2 my-4">Proceed to Payment</button>
    </form>
    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">TOLL PASS</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$50</h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>ADD TOLL PASS</li>
                <li>need to use the fast lane? add a toll pass at a discounted price</li>
                </ul>
                <button type="button" class="btn-addon">Add</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">INSURANCE</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$60</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>ADD INSURANCE</li>
                    <li>Drive Safe, if not? we got you covered</li>
                </ul>
                <button type="button" class="btn-addon">Add</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">TOLL PASS</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$70</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                    <li>Baby on Board, We're on board!</li>
                </ul>
                <button type="button" class="btn-addon" onclick="">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection
