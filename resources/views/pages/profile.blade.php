@include('layouts.partials.head')
<style>
    input:focus{
        border:1px solid;
    }
</style>
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=491429864669717&autoLogAppEvents=1';
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1 profile-title">{{ $user -> first_name }} 's Profile</h1>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="profile-header-container">
                        <div class="profile-header-img">
                            <img class="rounded-circle my-4" id="profilepic" src="../storage/avatars/{{$user->avatar}}"  alt="profile picture" width="50px" height="50px">

                            <!-- badge -->
                            <div class="rank-label-container">
                            <span class="label label-default rank-label">{{$user->name}}</span>
                            </div>
                        </div>
                        <button class="btn-lg btn-link" style="color:#ff911c;"  type="button" id="submitBooking"  data-toggle="modal" data-target="#changeProfileAvaModal" >
                            Click to change profile picture
                        </button>

                </div>
                <br>
                <br>
                <!-- Button trigger referral modal -->
                <button class="px-2 py-1" type="button" id="submitBooking" data-toggle="modal" data-target="#referralsModalCenter">
                Get Referral Code
                </button>

                <!-- Modal -->
                <div class="modal fade" id="referralsModalCenter" tabindex="-1" role="dialog" aria-labelledby="referralModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="referralModalLongTitle">Your referral code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Share this code to get neat discounts</p>
                            <!-- Output Referral Link -->
                            @forelse(auth()->user()->getReferrals() as $referral)
                                        <?php

                                        $referrallink = "$referral->link";
                                        ?>

                                            <h4>{{ $referral->program->name }}</h4>
                                            <code id="referrallink">{{ $referral->link }}</code>
                                            <br><br>

                                            <!-- The button used to copy the text -->
                                            <button type="button" class="login-form-btn mx-auto mb-2" data-toggle="modal" onclick="copyToClipboard('#referrallink')">
                                                Copy Link
                                            </button>
                                            <div class="fb-share-button" data-href="<?php echo $referrallink ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fregister%3Fref%3De350934e-c09e-11e8-a5eb-f832e43def64&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                            <br>


                                            <br><p>Number of referred users: {{ $referral->relationships()->count() }}</p>
                                        @empty
                                            No referrals
                                        @endforelse
                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>

                </div>
            <div class="col-sm-6 container-profile text-justify">
                @csrf
                <!-- First Name -->
                <div class="row my-2">{{ __('First name') }}: {{ $user -> first_name }}</div>

                <!-- Last Name -->
                <div class="row my-2">
                    {{ __('Last name') }}: {{ $user -> last_name }}

                </div>

                <!-- DOB -->
                <div class="row my-2">
                    {{ __('Date of Birth') }}: {{ $user -> date_of_birth }}

                </div>

                <!-- Contact Number -->
                <div class="row my-2">
                    {{ __('Contact Number') }}: {{ $user -> contact_number }}

                </div>
                <!-- Email -->
                <div class="row my-2">
                    {{ __('E-Mail') }}: {{ $user -> email }}

                </div>

                <!-- Driver licence -->
                <div class="row my-2">
                    <span>{{ __('Driver licence No.') }}: {{ $user -> licence_number }}</span>
                </div>
                <div class="mt-2">
                <button type="button" class="btn btn-link" style="color:#ff911c;" data-toggle="modal" data-target="#changePasswordModal">
                    Change your password
                </button>
                </div>
                <!-- save button -->
                <div class="container-register-form-btn my-4">
                    <div id="app" class="col-md-12">
                            <br>
                        <div id="app" class="col-md-12">
                            <!-- vuesax file found assets/js/partials/Changepwd -->
                            <changepwd-component></changepwd-component>
                        </div>
                    </div>
                </div>


                <!-- Change Password Modal -->
                <div class="modal fade text-center" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="submit" class="login-form-btn mx-auto">
                                            Change Password
                                        </button>
                                  </div>
                              </form>
                          </div>
                      <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!--BEGIN: modal for profile picture -->
          <div class="modal fade" id="changeProfileAvaModal" tabindex="-1" role="dialog" aria-labelledby="changeProfileAvaModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="changeProfileAvaLabel">Change profile picture</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <!-- Submit  form button for profile picture -->
                    <form action="/profile" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- file input button -->
                      <div class="form-group">
                        <input type="file" class="col-md-12" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Accepted file formats:jpeg,png,jpg,gif,svg. Size of image should not be more than 2MB.</small>
                        <!-- Submit file button -->
                        <button type="submit" class="login-form-btn mx-auto">Submit</button>
                      </div>
                    </form>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
              </div>
            </div>
          </div>
          <!-- END: modal for profile picture -->
        </div>
        </main>
    </div>
    <!-- /#wrapper -->
    <script>
    function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    }
    </script>
  </body>

</html>
