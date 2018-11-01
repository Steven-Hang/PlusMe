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
                <img class="rounded-circle" src="/css/images/profileimg.png" width="50px" height="50px" style="margin-top:10%;">
                <div id="adminid" style="margin-top:30px;margin-bottom:10px;"><h6>admin001@plusme.com</h6></div>
                <button type="button" class="btn btn-link" style="color:orange;"  data-toggle="modal" data-target="#changePasswordModal">Change your password</button>
            </div>
        </main>
        <!-- Change Password Modal -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <form class="form-horizontal col-md-12" method="POST" action="{{ route('changePassword') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                            <label for="new-password" class="col-md-12 control-label">Current Password</label>

                                            <div class="col-md-12">
                                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                                @if ($errors->has('current-password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                            <label for="new-password" class="col-md-12 control-label">New Password</label>

                                            <div class="col-md-12">
                                                <input id="new-password" type="password" class="form-control" name="new-password" required>
                                          @if ($errors->has('new-password'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('new-password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="new-password-confirm" class="col-md-12 control-label">Confirm New Password</label>

                                      <div class="col-md-12">
                                          <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-primary">
                                              Change Password
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
    </div>
    <!-- /#wrapper -->

  </body>

</html>