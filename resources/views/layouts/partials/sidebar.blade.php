 <!-- Sidebar -->
 <ul class="sidebar navbar-nav navbar-light bg-white" style="border-right: 1px solid rgb(222,226,230);">
    <li style="border-bottom: 1px solid rgb(222,226,230);">
        <img class="rounded-circle my-2" id="profilepic" src="/storage/avatars/{{ $user->avatar }}" width="50px" height="50px">

    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">
        <span><img src="../css/icons/table.png" width="24px"></span>
        <span>My Profile</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ route('bookinghistory') }}">
        <span><img src="../css/icons/bookings.png" width="24px"></span>
        <span>Booking History</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('messages') }}">
        <span><img src="../css/icons/users.png" width="24px"></span>
        <span>Message Box</span></a>
    </li>
  </ul>
