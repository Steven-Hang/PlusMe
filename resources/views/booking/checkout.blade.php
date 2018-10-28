@extends('layouts.app')

@section('content')
  <title>PlusMe - Payment </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  
<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h1>Payment Summary</h1>
      <p>First Name: {{$user->first_name}}</p> 
      <P>Last Name: {{$user->last_name}}</p>
      <P>Price: ${{$fprice}}</p>
  <hr>
  <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="/booking/checkout/payment">
      {{ csrf_field() }}
      <h2 class="w3-text-blue">Payment Form</h2>
      <p>Please Use the Details Following to Complete Booking: </p>
      <p>Email: Test_PlusMeUser@mail.com</p>
      <p> Password:  Plusme12345</p>
          
      <input  class="" name="amount" type="hidden" value="{{$fprice}}"></p>      
      <button class="">Pay with PayPal</button></p>
  </form>
  <hr>
  <p>Skip Paypal - Just Book Me Already! </p>
    <a href="{{route('booking.complete')}}">Complete Booking Route</a>
    

  
</body>
@endsection
