@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Bookings</h1>
                <div class="input-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="/css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="/css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
              <!-- table -->
              <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">
              <thead>
                <tr>
                  {{ $bookings->links() }}
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Cost</th>
                  <th>Active?</th>
                  <th>User ID</th>
                  <th>Location ID</th>
                </tr>
              </thead>
              <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td>{{$booking->start_date}}</td>
                    <td>{{$booking->end_date}}</td>
                    <td>${{$booking->price}}</td>
                    <td>{{$booking->is_Active}}</td>
                    <td>{{$booking->user_id}}</td>
                    <td>{{$booking->location_id}}</td>

                    <td><a href="" class="btn">Edit</a></td>
                    <td>
                      <form action="" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn" type="submit">Delete</button>
                      </form>
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
