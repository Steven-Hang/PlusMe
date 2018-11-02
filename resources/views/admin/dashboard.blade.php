@include('layouts.partials.head')
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
        <div class="col-md-12">
          <div class="row-md-12">
        <a class="weatherwidget-io" href="https://forecast7.com/en/n37d81144d96/melbourne/" data-label_1="MELBOURNE" data-label_2="Melbourne" data-theme="original" data-basecolor="#ffffff" data-textcolor="#f6ae45" >MELBOURNE Melbourne</a>
          <script>
          !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
          </script>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-4">
              <div class="card text-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/bookings.png" width="80px">
                   <!--toLearn <i class="fas fa-fw fa-comments"></i>-->
                  </div>
                  <strong class="mr-5">Bookings</strong>
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
              <div class="card text-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/users.png" width="80px">
                  </div>
                  <strong class="mr-5">Users</strong>
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
              <div class="card text-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/car.png" width="80px">
                  </div>
                  <strong class="mr-5">Vehicles</strong>
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
              <div class="card text-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                        <img src="./css/icons/carpark.png" width="80px">
                  </div>
                  <strong class="mr-5">Parking lot</strong>
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
        </div>
        </div><!--end wrapper-->
  </body>

</html>
