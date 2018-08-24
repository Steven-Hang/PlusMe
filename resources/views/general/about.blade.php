@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row">
            <div class="col-sm-4"><img src="./images/car.svg" class="img" alt="Car Share" width="80%" ></div>
            <div class="col-sm-4"><img src="./images/platform-independent.svg" class="img" alt="Platform-independent" width="80%" ></div>
            <div class="col-sm-4"><img src="./images/paypal.svg" class="img" alt="Paypal" width="60%" ></div>
        </div>
        

        <div class="row">
        @include('layouts.partials.footer')
        </div>
        <!-- end column -->

</div>
<!-- end container -->




@endsection
