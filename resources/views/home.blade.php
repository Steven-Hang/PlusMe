@extends('layouts.app')
<head>
<!-- javascript for google map -->
        {!! $map['js'] !!}
</head>
@section('content')
<div class="row">
  <div class="col-8">
    <!-- display the google map -->
    {!! $map['html'] !!}
  </div>
  <div class="col-4">
    <div>
        This is the Dashboard side bar as per wireframe
        <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">Profile</a>
        <a class="nav-link" href="{{ route('booking/step2')}}">BOOK!</a>

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
</div>
@endsection
