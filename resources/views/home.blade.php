@extends('layouts.app')
<head>
</head>
@section('content')
<div class="row">
  <div class="col-8">
    <!-- display the google map -->
      @include('layouts.partials.map')
  </div>
  <div class="col-4">
    <div>
        This is the Dashboard side bar as per wireframe
        <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">Profile</a>
        <a class="nav-link" href="{{ route('booking/step2')}}">BOOK!</a>
  </div>
</div>
@endsection
