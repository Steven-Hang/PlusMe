@include('layouts.partials.head')
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
      <div id="content-wrapper">
        <div class="container">
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-4 col-sm-6 mb-4">
              <div class="card text-dark bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="/css/icons/bookings.png" width="80px">
                   <!--toLearn <i class="fas fa-fw fa-comments"></i>-->
                  </div>
                  <div class="mr-5">Bookings</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('abookings') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="/css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-4">
              <div class="card text-dark bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="/css/icons/users.png" width="80px">
                  </div>
                  <div class="mr-5">Users!</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('ausers') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="/css/icons/angle-right.svg" width="20px">
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
                        <img src="/css/icons/car.png" width="80px">
                  </div>
                  <div class="mr-5">Vehicles</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('avehicles') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="/css/icons/angle-right.svg" width="20px">
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-dark bg-light o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="/css/icons/carpark.png" width="80px">
                  </div>
                  <div class="mr-5">Parking lot</div>
                </div>
                <a class="card-footer text-dark clearfix small z-1" href="{{ route('aparkinglot') }}">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                        <img src="/css/icons/angle-right.svg" width="20px">
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
