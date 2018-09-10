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
                        <a class="nav-link" href="{{ route('avehicles') }}">
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
                <a class="nav-link active" href="#">
                    <span><img src="./css/icons/notification.png" width="24px"></span>
                    Notifications<span class="sr-only">(current)</span>
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
                <h1 class="h1">Notifications</h1>
                <button class="btn btn-warning" style="padding-left:15px;padding-right:15px;">Compose</button>
            </div>
            <div class="my-3 p-3 bg-white rounded box-shadow" style="opacity:0.98;text-align: justify;">
                <h6 class="border-bottom border-gray pb-2 mb-0">All notifications</h6>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                    Welcome, jlhsdakjdas hlljas hldas hjasdhkjlfd.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                    Welcome hljahsd ljha Hkjlasd.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Admin01 To All</strong>
                        Plus Me car share is jalksjd Jklasd jklsds
                    </p>
                </div>
            </div>
        </main>
      </div>
    </div>
</div>
@endsection
