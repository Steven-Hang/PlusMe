
@extends('layouts.app')
@section('content')
<!--warning/success message (can delete if you want) -->
<div id="app">
    <sidebar-component></sidebar-component></div>

<div class="container-fluid">

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
             <ul>
            @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

<div class="row">
    <div class="col-2">

        <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" height="100" width="100" src="/storage/avatars/{{ $user->avatar }}" />
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label">{{$user->name}}</span>
                    </div>
                </div>
            </div>

     <!-- Output Referral Link -->
     @forelse(auth()->user()->getReferrals() as $referral)
          <h4>
              {{ $referral->program->name }}
          </h4>
          <code>
              {{ $referral->link }}
          </code>
          <p>
              Number of referred users: {{ $referral->relationships()->count() }}
          </p>
        @empty
            No referrals
        @endforelse
    </div>

    <div class="col-md-12">
    <h1>User settings</h1>
    <!-- Profile Picture (fix me thanks) -->

    <br><br>
    <!-- show profile info -->
    <div>
    <ul>Full Name: {{ $user -> first_name }} {{ $user -> last_name }} </ul>
    <ul>Date of Birth: {{ $user -> date_of_birth }}</ul>
    <ul>Contact Number: {{ $user -> contact_number }}</ul>
    <ul>Email: {{ $user -> email }}</ul>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePasswordModal">
  Change your password
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changeProfileAvaModal">
  Change your profile picture
</button>

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
            <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </div>
        </form>                
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    

    </div>


</div>
</div>
</div>
@endsection


