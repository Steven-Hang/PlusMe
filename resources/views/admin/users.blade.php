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
                        <a class="nav-link" href="#">
                            <span><img src="./css/icons/car.png" width="24px"></span>
                            Vehicles
                        </a>
                    </li>
                    <li>
                        <a class="nav-link active" href="#">
                            <span><img src="./css/icons/users.png" width="24px"></span>
                            Users<span class="sr-only">(current)</span>
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
                <a class="nav-link" href="#">
                    <span><img src="./css/icons/profile.png" width="24px"></span>
                  My Profile
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Users</h1>
                <div class="input-group col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar" style="margin-bottom: 16px;">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Driver licence</th>
                  <th>DOB</th>
                  <th>Phone number</th>
                  <th>Status</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>0000002</td>
                  <td>Tony Barrett</td>
                  <td>tsjkakk@gmail.com</td>
                  <td>1234567890</td>
                  <td>18/08/1987</td>
                  <td>0412312345</td>
                  <td>Active</td>
                  <td><button class="btn btn-sm btn-light"><img src="./css/icons/cancel.png" width="20px"></button></td>
                </tr>
                <tr>
                    <td>0000001</td>
                    <td>John Ajlsd</td>
                    <td>asdjkhl@gmail.com</td>
                    <td>0987654321</td>
                    <td>19/08/1990</td>
                    <td>0532154321</td>
                    <td>Active</td>
                    <td><button class="btn btn-sm btn-light"><img src="./css/icons/cancel.png" width="20px"></button></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>N/A</td>
                    <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>N/A</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <div id="pageno" style="margin:15px;">
                <span>1</span> of  <span>1</span>
            </div>
          </div>

        </main>
      </div>
    </div>
</div>
@endsection
