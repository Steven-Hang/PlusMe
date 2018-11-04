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
                <label class="row">Price: <strong> ${{$price}}</strong></label>
            </div>
            <div class="form-group col-md-12" id="addons">
            <h2>Addons</h2>
            <p class="row">Toll? <p class="row" id="addedToll"></p></p>
            <p class="row">Baby Seat? <p class="row" id="addedBaby"></p></p>
            <p class="row">Insurance?<p class="row" id="addedInsurance"></p></p>
            </div>
        </div>

    <form  method="POST" action="{{ route('booking.payment')}}">
    @csrf
        <input type="hidden" id="price" name="price" value="{{$price}}"/>
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
                <button type="button" class="btn-addon" onclick="addToll()">Add</button>
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
                <button type="button" class="btn-addon" onclick="addInsurance()">Add</button>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Baby Seat</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$70</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                    <li>Baby on Board, We're on board!</li>
                </ul>
                <button type="button" class="btn-addon" onclick="addBaby()">Add</button>
            </div>
        </div>
    </div>
</div>
<script>
function addToll() {
  document.getElementById("addedToll").innerHTML = "Yes Please";
  finalPrice = 50;
  var x =  parseInt(document.getElementById("price").value);
  document.getElementById("price").value = finalPrice + x; 
}
function addBaby() {
  document.getElementById("addedBaby").innerHTML = "Yes Please";
  finalPrice = 60;
  var x =  parseInt(document.getElementById("price").value);
  document.getElementById("price").value = finalPrice + x; 
}
function addInsurance() {
  document.getElementById("addedInsurance").innerHTML = "Yes Please";
  finalPrice = 70;
  var x =  parseInt(document.getElementById("price").value);
  document.getElementById("price").value = finalPrice + x; 
}
</script>
@endsection
