
@extends('layouts.app')

@section('content')
    <h1>Add New Parking Location</h1>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
     <form action="{{route('Location.store')}}" method="post">
     @csrf
      <div class="form-group">
        <label for="description">Location Description</label>
        <input type="text" class="form-control" id="locationDescription" name="description">
      </div>
      <div class="form-group">
        <label for="description">Address</label>
        <input type="text" class="form-control" id="locationAddress" name="address">
      </div>
      <div class="form-group">
        <label for="description">City</label>
        <input type="text" class="form-control" id="locationCity" name="city">
      </div>
      <div class="form-group">
        <label for="description">State</label>
        <input type="text" class="form-control" id="locationState" name="state">
      </div>
      <div class="form-group">
        <label for="description">Zip</label>
        <input type="text" class="form-control" id="locationZip" name="zip">
      </div>
      <div class="form-group">
        <label for="description">Latitude</label>
        <input type="text" class="form-control" id="locationLat" name="lat">
      </div>
      <div class="form-group">
        <label for="description">Longitude</label>
        <input type="text" class="form-control" id="locationLng" name="lng">
      </div>
     
      <button type="submit" class="btn btn-primary">Add New Location</button>
    </form>
@endsection