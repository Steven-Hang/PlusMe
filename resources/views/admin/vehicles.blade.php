@include('layouts.partials.head')

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
          <a class="nav-link" href="{{ route('admindashboard') }}">
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
          <a class="nav-link active" href="{{ route('avehicles') }}">
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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Vehicles</h1>
                <div class="input-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Car ID</th>
                  <th>Car type</th>
                  <th>Num of seats</th>
                  <th>is Available</th>
                  <th>Parking lot ID</th>
                  <th>Current Location</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($vehicles as $vehicle)
                <tr>
                  <td>{{$vehicle['id']}}</td>
                  <td>{{$vehicle['name_of_car']}}</td>
                  <td>{{$vehicle['type']}}</td>
                  <td>{{$vehicle['no_of_seats']}}</td>
                  <td>{{$vehicle['isAvailable']}}</td>
                  <td><a href="" class="btn btn-warning">Edit</a></td>
                  <td>
                    <form action="" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-sm btn-light" type="submit">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                <tr>
                  <td>suv0000001</td>
                  <td>SUV</td>
                  <td>7</td>
                  <td>N/A</td>
                  <td>CITY0001</td>
                  <td>37.8098° S, 144.9652° E</td>
                  <td><button class="btn btn-sm btn-light"><img src="./css/icons/cancel.png" width="20px"></button></td>
                </tr>
                <tr>
                    <td>suv0000002</td>
                    <td>SUV</td>
                    <td>7</td>
                    <td>Available</td>
                    <td>CITY0001</td>
                    <td>Returned</td>
                    <td><button class="btn btn-sm btn-light"><img src="./css/icons/cancel.png" width="20px"></button></td>
                </tr>
                
              </tbody>
            </table>
            <div id="pageno" style="margin:15px;">
                <span>1</span> of  <span>1</span>
            </div>
          </div>

        </main>

    </div>
    <!-- /#wrapper -->

  </body>

</html>

