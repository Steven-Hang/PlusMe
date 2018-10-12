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
<style>

#wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#wrapper #content-wrapper {
  overflow-x: hidden;
  width: 100%;
  padding-top: 1rem;
  padding-bottom: 80px;
}

@media(max-width: 768px){

#adminid{
    display: none;
}

#profilepic{
    width: 30px;
    height: 30px;
    margin:5px;
}

}

.smaller {
  font-size: 0.7rem;
}

.sidebar {
  width: 90px !important;
  background-color: #fcfcfc;
  min-height: calc(100vh - 80px);
}

.sidebar .nav-item{
    height: 50px;
}

.sidebar .nav-item .nav-link {
  text-align: center;
  padding: 0.75rem 1rem;
  width: 90px;
  color:#343a40;
  border:none !important;
}

.sidebar .nav-item .nav-link span {
  font-size: 0.65rem;
  display: block;
}

.sidebar .nav-item .nav-link {
  color: grey;
}

.sidebar .nav-item .nav-link:active,
.sidebar .nav-item .nav-link:focus,
.sidebar .nav-item .nav-link:hover {
  background-color: #ffd0a0;
  border:none !important;
  color:#343a40 !important;
}

.sidebar .nav-item .nav-link.active{
    background-color: #ffb970;
    color:black;
}

@media (min-width: 768px) {

.container{
    padding-top: 5%;
    padding-left: 8%;
}
  .sidebar {
    width: 200px !important;
  }
  .sidebar .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    padding: 0.5rem 1rem;
    width: 200px;
  }
  .sidebar .nav-item .nav-link span {
    font-size: 1rem;
    display: inline;
  }
}

.card-body-icon {
  position: absolute;
  z-index: 0;
  top: -1.25rem;
  right: 0.5rem;
  opacity: 0.4;
  font-size: 5rem;
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
}

 /*---- Form ----*/
 .editprofile-form {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding:5px 88px 20px 190px;
}

.container-profile{
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

@media (max-width: 576px) {
    .editprofile-form {
        padding: 20px 0 0 0;
    }
    .profile-title{
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .editprofile-form {
      padding: 10px 0 0 0;
    }

    .profile-title{
        font-size: 18px;
    }
}

</style>
@section('content')
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav navbar-light bg-white">
        <li  class="mb-2" style="border-bottom: 1px solid rgb(222,226,230);">
            <img class="rounded-circle my-2" id="profilepic" src="./css/images/profileimg.png" width="50px" height="50px">
        </li>
        <p style="color:black;"> BOOKING ID:12345678</p>
        <p style="color:gray;">CAR TYPE</p>
        <img src="css/images/sedan.jpg" class="img" alt="Car Share" width="200" height="150">
        <sth>Economy</sth><p></p>
        <sth>Start time: 2:30pm</sth>
        <p>05/09/2018</p>
        <sth>End time: 5:30pm</sth>
        <p>05/09/2018</p>
        <sth>Return location:</p>
        <sth>400 Collin Street</p>
        <P>Car ID:3456782765</p>

    </ul>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row mb-2">
            <div class="col-md-4 search-container ">
                <input class="border py-2 px-1" id="pac-input" type="text" placeholder="Please enter a location....." name="search" size=30px;>
            </div>
            <div class="col-md-8">
                <form action="/action_page.php">
                        Start Date: <input class="border py-2 px-1" type="date" placeholder="Start Time....." name="Stime">
                        End Date:<input class="border py-2 px-1" type="date" placeholder="End Time......" name="Etime">

                </form>
            </div>
        </div>
        <div>
            <!-- display the google map -->
            @include('layouts.partials.map')
        </div>
    </main>
</div>
<!-- /#wrapper -->
@endsection
