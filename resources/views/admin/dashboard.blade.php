@include('layouts.partials.head')
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
  padding-bottom: 30px;
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

.o-hidden {
  overflow: hidden !important;
}

.z-1 {
  z-index: 1;
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

</style>
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav navbar-light bg-white">
        <li style="border-bottom: 1px solid rgb(222,226,230);">
            <img class="rounded-circle mt-2" id="profilepic" src="./css/images/profileimg.png" width="50px" height="50px">
            <div id="adminid" class="my-3"><h6>admin001@plusme.com</h6></div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('admindashboard') }}">
            <span><img src="./css/icons/table.png" width="24px"></span>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('abookings') }}">
            <span><img src="./css/icons/bookings.png" width="24px"></span>
            <span>Bookings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ausers') }}">
            <span><img src="./css/icons/users.png" width="24px"></span>
            <span>Users</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('avehicles') }}">
                <span><img src="./css/icons/car.png" width="24px"></span>
            <span>Vehicles</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('aparkinglot') }}">
                <span><img src="./css/icons/carpark.png" width="24px"></span>
                <span>Parking lots</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('anotifications') }}">
                <span><img src="./css/icons/notification.png" width="24px"></span>
                <span>Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adminprofile') }}">
                <span><img src="./css/icons/profile.png" width="24px"></span>
                <span>My Profile</span>
            </a>
        </li>
      </ul>

      <div id="content-wrapper">
        <div class="container">
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-4 col-sm-6 mb-4">
              <div class="card text-dark bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/bookings.png" width="80px">
                   <!--toLearn <i class="fas fa-fw fa-comments"></i>-->
                  </div>
                  <div class="mr-5">20 new Bookings</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('abookings') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="./css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-4">
              <div class="card text-dark bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/users.png" width="80px">
                  </div>
                  <div class="mr-5">11 New Users!</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('ausers') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="./css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-dark bg-info o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/car.png" width="80px">
                  </div>
                  <div class="mr-5">Vehicles</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('avehicles') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="./css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-dark bg-light o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/carpark.png" width="80px">
                  </div>
                  <div class="mr-5">Parking lot</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('aparkinglot') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="./css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


  </body>

</html>
