@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>PlusMe - Payment </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h1>Payment Summary</h1>
      <p>First Name: </p> 
      <P>Last Name:</p>
      <P>Price: $</p>
       </div>
       <div class="col">
       <div id="dropin-container"></div>
         <button id="submit-button">Request payment method</button>
       </div>
     </div>
     </div>
  </div>
  
  <!-- script in order to run braintree api -->
  <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: "{{ Braintree_ClientToken::generate() }}",
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
          $.get('{{ route('payment.process') }}', {payload}, function (response) {
            if (response.success) {
              alert('Payment successfull!');
            } else {
              alert('Payment failed');
            }
          }, 'json');
        });
      });
    });
  </script>
</body>
</html>
@endsection
