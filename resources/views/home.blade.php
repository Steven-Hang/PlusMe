@extends('layouts.app')
<style>

 .main-container {
 min-height: 100vh; /* will cover the 100% of viewport */
 overflow: hidden;
 display: block;
 position: relative;
}
footer {
 position: absolute;
 bottom: 0;
 width: 100%;
}
sth {
    color:black ;

}
#boarder {
    background-color: #F8F8F8;
    border: 2px #F8F8F8;
    padding: 5px;
    border-radius: 15px;
}
.btn {
    background-color: orange;
    border: none;
    color: black;
    padding: 15px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
  }

.topnav input[type=text] {
    background-color: #F8F8F8;
    border: 2px #F8F8F8;
    padding: 10px;
    border-radius: 20px;
    margin-top: 30px;
    margin-right: 25px;
    font-size: 20px;
    width: 30%;
}


</style>
@section('content')
<div class="topnav">

        <div class="search-container">
          <form action="/action_page.php">
            <input id="pac-input" type="text" placeholder="Please enter a location....." name="search">
            <input type="text" placeholder="Start Time....." name="Stime">
            <input type="text" placeholder="End Time......" name="Etime">
        </div>
      </div>

<div class='main-container'>
    <div class="row">
        <div class="col-3">
            <div id="boarder">
                        <p style="color:black;">BOOKING ID:12345678</p>
                        <p style="color:gray;">CAR TYPE</p>
                        <img src="css/images/sedan.jpg" class="img" alt="Car Share" width="200" height="150">
                        <p></p>
                        <sth>Economy</sth><p></p>
                        <sth>Start time: 2:30pm</sth>
                        <p>05/09/2018</p>
                        <sth>End time: 5:30pm</sth>
                        <p>05/09/2018</p>
                       <!-- <p><button class="btn" onclick="alert('Time Extended!')">Enable extension</button></p> -->
                        <sth>Return location:</p>
                        <sth>400 Collin Street</p>
                        <!-- <p><button class="btn" onclick="alert('Thankyou!')">Return vehicle</button></p> -->
                        <P>Car ID:3456782765</p>
                </div>
        </div>
        
        <div class="col-9">
            <!-- display the google map -->
            @include('layouts.partials.map')
        </div>
</div>
@endsection
