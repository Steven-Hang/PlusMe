@extends('layouts.app')

@section('content')
<div class="container">

        <div class="wrapper">
        @include('layouts.partials.sidebar')
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Message</h6>
        <small class="d-block text-right mt-3">
            <a href="#">Message to friend</a>
          </small>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@admin</strong>
            You can check your booking history....
          </p>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@user2</strong>
            Heyy qwerutan ajksj zm,nzdjkajf akj;sd...
          </p>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@admin</strong>
            Welcome!!...
          </p>
        </div>
      </div>
        </div>
    @include('layouts.partials.footer');
</div>
@endsection
