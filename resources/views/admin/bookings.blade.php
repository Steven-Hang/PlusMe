@include('layouts.partials.head')
<style>
    input:focus{
        border: 1px solid rgb(54,84,99,0.7);
    }
</style>
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Bookings</h1>
                <div class="input-group col-md-6 mb-2">
                <form action="{{ route('booking.search')}}" >
                    <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Search by Booking ID" aria-label="search" aria-describedby="basic-addon2"  name="q">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="sumbit">Search</button>
                    </div>
                    </div>
                </div>
                </form>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="../css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="../css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
              <!-- table -->
              <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">

              <thead>
              {{ $bookings->links() }}
                <tr>
                  <th>ID</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Cost</th>
                  <th>Active?</th>
                  <th>User ID</th>
                  <th>Location ID</th>
                  <th>Action</th>
                  <th>Location Confirmed</th>
                  <th>Booking Hours Left</th>
                </tr>
                </thead>
            <tbody>
                @if($qbooking)
                <tr>
                    <td>{{$qbooking->id}}</td>
                    <td>{{$qbooking->start_date}}</td>
                    <td>{{$qbooking->end_date}}</td>
                    <td>${{$qbooking->price}}</td>
                    <td>{{$qbooking->is_Active}}</td>
                    <td>{{$qbooking->user_id}}</td>
                    <td>{{$qbooking->location_id}}</td>
                    <td><a href="" class="btn">Edit</a></td>
                </tr>
                @endif
                @foreach($bookings as $booking)

                    <td>{{$booking->id}}</td>
                    <td>{{$booking->start_date}}</td>
                    <td>{{$booking->end_date}}</td>
                    <td>${{$booking->price}}</td>
                    <td>{{$booking->is_Active}}</td>
                    <td>{{$booking->user_id}}</td>
                    <td>{{$booking->location_id}}</td>
                    <td><a href="" class="btn">Edit</a></td>
                    <td>{{$booking->location_confirm}}</td>
                    <td>{{$booking->location_duration}}</td>


                    <td>


                    </td>
                  </tr>
                  @endforeach

            </main>

    </div>
    <!-- /#wrapper -->
    <script src="//unpkg.com/vue/dist/vue.js"></script>
<script src="//unpkg.com/element-ui/lib/index.js"></script>
<script src="//unpkg.com/element-ui/lib/umd/locale/en.js"></script>
<script src="//unpkg.com/vue-data-tables@3.4.2/dist/data-tables.min.js"></script>
  </body>

</html>
