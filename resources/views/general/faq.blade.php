@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="faq-masthead">
    <h1>PlusMe CarShare FAQ</h1>
    <style>
    .sidenav {
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 330px;
    left: 10px;
    background: #ffffff;
    overflow-x: hidden;
    padding: 8px 20px;
    border-right: 1px solid #ff822e;
}
li {
    display: inline;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
}

.sidenav a:hover{
    color: #ff822e;
}


@media (max-height: 576px) {
    .sidenav {float:none;width: 100%;position:unset  }
    .sidenav a { float: none;width:100%;}
}
    </style>
</header>

<div class='wrapper'>
        <div class="sidenav">
            <ul>
                <li><a href="#SignUp">Sign Up</a></li>
                <li><a href="#Password">Password</a></li>
                <li><a href="#BookingProcess">Booking</a></li>
                <li><a href="#Payment">Payment</a></li>
                <li><a href="#Refund">Refund</a></li>
              </div>

    <section class="faq-account">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="faq-part" id="SignUp">
                        <h3 class="faq-question">
                        How do I sign up?
                    </h3>
                    <h5 class="faq-answer">
                        There is a 'Sign up' button in our home page, when users press it, user should be able to create an account.
                    </h5>
                </div>
                <hr>
                <div class="faq-part">
                    <h3 class="faq-question">
                        What information do I need for sign up?
                    </h3>
                    <h5 class="faq-answer">
                        Users will be asked to provide their: firstname, lastname, email address, driver licence number and phone number.
                    </h5>
                </div>
                <hr>
                <div class="faq-part" id="Password">
                    <h3 class="faq-question">
                        How do I change my password?
                    </h3>
                    <h5 class="faq-answer">
                        There is a button under user's profile page, when users press it, user should be able to change their password in their profile page. Please feel free to contact us if this can't help you.
                    </h5>
                </div>
                <hr>
                <div class="faq-part" id="BookingProcess">
                    <h3 class="faq-question">
                        What is the full process of booking for a vehicle online?
                    </h3>
                    <h5 class="faq-answer">
                        When you want to book a vehicle online from our official website. Firstly, you need to login into your account and fill in the requirements you want for your vehicle in our home page, then choose your duration for how long you are going to book your vehicle form us. After that you can press the checkout button in your cart. Lastly you should be asked to login to your Paypal account and after paying the amount of money, you should receive an email which you can save as a record.
                    </h5>
                </div>
                <hr>
                <div class="faq-part">
                        <h3 class="faq-question">
                            Are there limits of duration for booking a vehicle?
                        </h3>
                        <h5 class="faq-answer">
                            There aren’t limits for booking a vehicle from us, if there were vehicles left in the database you will be able to book the duration of time for the vehicle you chose.
                        </h5>
                    </div>
                    <hr>
                    <div class="faq-part">
                        <h3 class="faq-question">
                           How much will PlusMe services charge me for renting a vehicle?
                        </h3>
                        <h5 class="faq-answer">
                           PlusMe services are very cheap! We only charge users $5 dollars AUD per hour for renting a vehcile!
                        </h5>
                    </div>
                <hr>
                <div class="faq-part">
                        <h3 class="faq-question">
                            How can I pick up the vehicle I booked?
                        </h3>
                        <h5 class="faq-answer">
                            You should be able to pick up your vehicle at the parking lot you had chosen.
                        </h5>
                    </div>
                <hr>
                <div class="faq-part">
                    <h3 class="faq-question">
                        I have paid the amount of money. However, I didn’t receive any email in my mail box, what should I do?
                    </h3>
                    <h5 class="faq-answer">
                        Please be patience, it would take less than 15 minutes to receive your e-invoice.
                    </h5>
                </div>
                <hr>

                <div class="faq-part">
                    <h3 class="faq-question">
                        So, I have been waiting for more than 15 minutes, now what?
                    </h3>
                    <h5 class="faq-answer">
                            Please check your ‘spam’ bin in your email. IF you still can’t see your invoice please take a screenshot of your payment receipt/invoice and contact us as soon as possible, we will provide support as soon as possible.
                    </h5>
                </div>
                <hr>
                <div class="faq-part" id="Payment">
                    <h3 class="faq-question">
                        What Payment method can I choose for booking a vehicle?
                    </h3>
                    <h5 class="faq-answer">
                        We only supports Master/Credit card payment method in the moment, sorry for the inconvenience. There will be more payment method on their way.
                    </h5>
                </div>
                <hr>
                <div class="faq-part" id="Refund">
                    <h3 class="faq-question">
                        I have some sudden issues, so I couldn’t come to pick up the vehicle, can I ask for a refund?
                    </h3>
                    <h5 class="faq-answer">
                        We are sorry to tell you that, NO we can’t refund for you.
                    </h5>
                </div>
                <hr>
                <div class="faq-part">
                    <h3 class="faq-question">
                        Situations which we will do a refund?
                    </h3>
                    <h5 class="faq-answer">
                        Technical problems while the vehicle is lent you. Unfortunate accidents (Manually) while the vehicle is lent you. System problems leads to an inconvenience.
                    </h5>
                </div>
                <hr>
            </div>
        </div>
    </section>

</div>

@endsection
