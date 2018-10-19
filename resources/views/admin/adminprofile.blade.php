@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
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
    <!-- /#wrapper -->

  </body>

</html>
