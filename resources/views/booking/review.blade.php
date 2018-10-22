@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col form-group ">
    <br>
        <h1>Comfirm your Booking </h1>
            <div class="row pickup-location-same">
                <label>Pickup Location: </label>
                <p> Output </p>
            </div>
            <div class="row pickup-date-same">
                <label>Pickup Date: </label>
                <p> Output </p>
            </div>
            <div class="row return-date-same">
                <label>Return Date: </label>
                <p> Output </p>
            </div>
            <a href="{{ route('booking.process')}}" class="btn btn-primary" style="height: 40px;">Edit</a>
    </div>
    <div class="card">
            <h5 class="card-header">car type</h5>
            <div class="card-body">
              <h5 class="card-title">$5 / hour</h5>
              <p class="card-text">Chosen Car Output</p>
              <a href="{{ route('booking/step2') }}" class="btn btn-primary">Edit</a>
            </div>
          </div>
    <br />
    <a href="{{ route('booking') }}" style="color:cornflowerblue">Back to step 2 </a>
    <div class="progress" style="margin: 10px 0">
        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
            <span class="sr-only">50%</span>
        </div>
    </div>
    <br >
    <!-- end form -->
        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>

    @include('layouts.partials.footer');
</div>
@endsection
