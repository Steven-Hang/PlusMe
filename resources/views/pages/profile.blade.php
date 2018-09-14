
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

    <div class="col-10">
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

    <!-- Submit  form button for profile picture -->
    <h2>Upload Profile Picture</h2>
    <form action="/profile" method="post" enctype="multipart/form-data">
        @csrf
        <!-- file input button -->
            <div class="form-group">
                <input type="file" class="" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Accepted file formats:jpeg,png,jpg,gif,svg. Size of image should not be more than 2MB.</small>

            <!-- Submit file button -->
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>




    </div>


</div>
</div>
</div>
@endsection


