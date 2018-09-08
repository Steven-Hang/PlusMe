@extends('layouts.app')

@section('content')
    <!-- The video -->
<div class="">
    <video autoplay muted loop id="myVideo">
        <source src="{{URL::asset('css/images/Blurred Bokeh Video.mp4')}}" type="video/mp4">
    </video>
</div>
@include('layouts.partials.footer') 
@endsection
