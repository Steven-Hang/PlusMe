<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>qwert@gmail.com</h3>
        <h6>id:u110002999</h6>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('profile') }}">My Profile</a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" data-toggle="collapse" aria-expanded="false">Book Car</a>
        </li>
        <li>
            <a href="{{ route('bookinghistory') }}">Booking History</a>
        </li>
        <li>
            <a href="#">Review</a>
        </li>
        <li>
            <a href="{{ route('messagebox') }}">Message</a>
        </li>
    </ul>
</nav>
