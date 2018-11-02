@extends('layouts.app')

@section('content')
  <title>PlusMe - Payment </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>

<body>
  <div class="container">
    <h1 class="mb-4 pb-2 border-bottom" >Payment</h1>
      <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong>Payment Summary</strong></h5>
                    <p class="card-text">First Name: {{$user->first_name}}</p>
                    <p class="card-text">Last Name: {{$user->last_name}}</p>
                    <p class="card-text">Price: ${{$fprice}}</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Skip Paypal - Just Book Me Already!</p>
                    <p class="card-text"><a href="{{route('booking.complete')}}">Complete Booking Route</a></p>
                </div>
            </div>
          </div>
          <div class="col-md-8 text-justify">
                <form method="POST" id="payment-form"  action="/booking/checkout/payment">
                    {{ csrf_field() }}
                    <p>Please Use the Details Following to Complete Booking: </p>
                    <p>Email: Test_PlusMeUser@mail.com</p>
                    <p>Password:  Plusme12345</p>
                    <br />
                    <input  name="amount" type="hidden" value="{{$fprice}}"></p>
                    <button type="submit" id="paypalpay"><strong>Pay with</strong><img src="../css/images/Paypal.png" width="140px" class="px-2"></button></p>
                </form>
            </div>
        </div>
</body>
@endsection
