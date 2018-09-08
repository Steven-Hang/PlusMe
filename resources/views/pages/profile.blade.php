
@extends('layouts.app')
@section('content')
<!--warning/success message (can delete if you want) -->
<div class='container'>
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

    <h1> Profile Page </h1>

    <!-- Profile Picture (fix me thanks) -->
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label">{{$user->name}}</span>
                    </div>
                </div>
            </div>
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
        <!-- Choose file button -->
            <div class="form-group">
                <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Accepted file formats:jpeg,png,jpg,gif,svg. Size of image should not be more than 2MB.</small>
            </div>
            <!-- Submit file button -->
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
@endsection
@include('layouts.partials.footer') 

   
