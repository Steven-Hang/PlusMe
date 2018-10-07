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
            <a class="nav-link active" href="{{ route('anotifications') }}">
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
                <h1 class="h1">Notifications</h1>
                <a href="{{ route('messages.create') }}"><button class="btn btn-warning" style="padding-left:15px;padding-right:15px;">Compose</button></a>
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
    <!-- /#wrapper -->

    </body>

    </html>
