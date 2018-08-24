@extends('layouts.app')

@section('content')


<br>
<h1>PlusMe CarShare FAQ</h1>

<div class="container">	
	<h2>Account</h2>
			<p>How do I change my password? <p>
				
				<div class="">
					<p>There is a button under user's profile page, when users press it, user should be able to change their password in their profile page. Please feel free to contact us if this can't help you.</p>
				</div> 
			

			
				<a class="" href="#0">How do I sign up?</a>
				<div class="">
					<p>There is a 'Sign up' button on the top between the 'Login' button in our home page, when users press it, user should be able to create an account.</p>
				</div> 
			
				<a class="" href="#0">What information do I need for sign up?</a>
				<div class="">
				<ul>
					<p>Users will be asked to provide:</p>
					<li>First Name </li>
					<li>Last Name</li>
					<li>E-mail</li>
					<li>Home Address</li>
					<li>Driver License</li>
					<li>Phone Number </li>
				</ul>
				</div> 
			
				<h2>Payments</h2>
			
				<a class=""> What is the full process of booking for a vehicle online?</a>
				<div class="">
				<p>When you want to book a vehicle online from our official website. Firstly, you need to login into your account and fill in the requirements you want for your vehicle in our home page, then choose your duration for how long you are going to book your vehicle form us. After that you can press the checkout button in your cart. Lastly you should be asked to login to your Paypal account and after paying the amount of money, you should receive an email which you can save as a record.</p>
				</div>
		
				<a class="" >I have paid the amount of money. However, I didn’t receive any email in my mail box, what should I do?</a>
				<div class="">
				<p>Please be patience, it would take less than 15 minutes to receive your e-invoice.</p>
				</div> 

				<a class="">So, I have been waiting for more than 15 minutes, now what?</a>
				<div class="">
				<p> Please check your ‘spam’ bin in your email. IF you still can’t see your invoice please take a screenshot of your payment receipt/invoice and contact us as soon as possible, we will provide support as soon as possible.</p>
				</div> 
			
				<a class="">What Payment method can I choose for booking a vehicle?</a>
				<div class="">
				<p> We only supports Paypal payment method in the moment, sorry for the inconvenience. There will be more payment method on their way.</p>
				</div> 
		
				<a class="">Are there limits of duration for booking a vehicle?</a>

				<p> There aren’t limits for booking a vehicle from us, if there were vehicles left in the database you will be able to book the duration of time for the vehicle you chose.</p>
				
				
				<h2>Refund</h2>
			
				<a class="" >I have some sudden issues, so I couldn’t come to pick up the vehicle, can I ask for a refund?</a>
				<div class="">
				<p>We are sorry to tell you that, NO we can’t refund for you.</p>
				</div> <!-- cd-faq-content -->
			
				<a class="">Situations which we will do a refund</a>
				<div class="">
				<p> 
				<p>Technical problems while the vehicle is lent you.</p>
				<p>Unfortunate accidents (Manually) while the vehicle is lent you.</p>
				<p>System problems leads to an inconvenience. </p>
				</p>
				</div> 

		
			<h2>Delivery</h2>
			
				<a class="">How can I pick up the vehicle I booked?</a>
				<div class="">
				<p>You should be able to pick up your vehicle on the spot you had chosen.</p>
		</div> 
	

	<div class="row">
    @include('layouts.partials.footer')
	</div>
</div>
@endsection
