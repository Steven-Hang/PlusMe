@extends('layouts.app')
<style>
    
 .main-container {
 min-height: 100vh; /* will cover the 100% of viewport */
 overflow: hidden;
 display: block;
 position: relative;
  /* height of your footer */
}
footer {
 position: absolute;
 bottom: 0;
 width: 100%;
}
</style>
@section('content')

<div class='main-container'>
    <div class="row">
        <div class="col-3">
            <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">Profile</a>
            <a class="nav-link" href="{{ route('booking/step2')}}">BOOK!</a>
        </div>
        <div class="col-9">
            
            <!-- display the google map -->
            
            @include('layouts.partials.map')
        </div>
</div>

</div>
@endsection
