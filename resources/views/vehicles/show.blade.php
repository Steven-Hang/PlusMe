@extends('vehicles.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Vehicle </h3> 
        <p><a class="btn btn-xs btn-primary" href="{{ route('vehicles.index') }}">Back</a></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Name Of Car : </strong>
        {{ $vehicle->name_of_car }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Type : </strong>
        {{ $vehicle->type }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>No Of Seats : </strong>
        {{ $vehicle->no_of_seats }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Available : </strong>
        {{ $vehicle->isAvailable }}
      </div>
    </div>
  </div>
  
@endsection