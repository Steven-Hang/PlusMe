@extends('layouts.app')

@section('content')
    <div class="container-fluid" >
      <div class="row">
        <nav class="col-md-2 bg-light sidebar">
          <div class="sidebar-sticky">

            <ul class="nav flex-column" style="align-items: flex-start">
                    <div class="account" style="position: inherit;height:120px;padding:15px;margin-bottom:5px;border-bottom: 1px solid rgb(222,226,230);">
                            <img class="rounded-circle" src="./css/images/profileimg.png" width="50px" height="50px">
                            <div id="adminid" style="margin-top:15px;margin-bottom:8px;"><h6>admin001@plusme.com</h6></div>
                        </div>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><img src="./css/icons/table.png" width="24px"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><img src="./css/icons/database.png" width="24px"></span>
                  Database
                </a>
                <ul style="align-items:inherit;list-style-type:none;">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('avehicles') }}">
                            <span><img src="./css/icons/car.png" width="24px"></span>
                            Vehicles
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <span><img src="./css/icons/users.png" width="24px"></span>
                            Users
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span><img src="./css/icons/carpark.png" width="24px"></span>
                            Parking lot
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><img src="./css/icons/notification.png" width="24px"></span>
                    Notifications
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span><img src="./css/icons/profile.png" width="24px"></span>
                  My Profile<span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">My Profile</h1>
            </div>

            <div class="account" style="background-color:white;opacity:0.98; height:460px;align-content:center;">
                <img class="rounded-circle" src="./css/images/profileimg.png" width="50px" height="50px" style="margin-top:10%;">
                <div id="adminid" style="margin-top:30px;margin-bottom:10px;"><h6>admin001@plusme.com</h6></div>
                <button type="button" class="btn btn-link" style="color:orange;">Change your password</button>
            </div>
        </main>
      </div>
    </div>
</div>
@endsection
