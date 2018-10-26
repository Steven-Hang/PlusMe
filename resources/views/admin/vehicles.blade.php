@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Vehicles</h1>
                <form action="{{route('vehicles.search')}}">
                <div class="input-group col-md-6 mb-2">
                    <input type="text" name="q" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
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
            <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>Car ID</th>
                  <th>Car Modal</th>
                  <th>Car Type</th>
                  <th>Number of Seats</th>
                  <th>Is Available</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              {{$vehicles->links()}}
              @if($qvehicle)
                <tr>
                    <td>{{$qvehicle->id}}</td>
                    <td>{{$qvehicle->name_of_car}}</td>
                    <td>{{$qvehicle->type}}</td>
                    <td>{{$qvehicle->no_of_seats}}</td>
                    <td>{{$qvehicle->isAvailable}}</td>
                    <td><a href="" class="btn">Edit</a></td>
                    <td>
                    <form action="{{ action('VehiclesController@destroy', $qvehicle->id)}}" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-sm btn-light" type="submit"><img src="../css/icons/cancel.png" width="20px"></button>
                    </form>
                  </td>
                </tr>
                @endif 
              @foreach($vehicles as $vehicle)
                <tr>
                  <td>{{$vehicle['id']}}</td>
                  <td>{{$vehicle['name_of_car']}}</td>
                  <td>{{$vehicle['type']}}</td>
                  <td>{{$vehicle['no_of_seats']}}</td>
                  <td>{{$vehicle['isAvailable']}}</td>
                  <td><a href="{{action('VehiclesController@edit', $vehicle['id'])}}" class="">Edit</a></td>
                  <td>
                    <form action="{{ action('VehiclesController@destroy', $vehicle['id'])}}" method="post">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-sm btn-light" type="submit"><img src="../css/icons/cancel.png" width="20px"></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div id="pageno" style="margin:15px;">
                <span>1</span> of  <span>1</span>
            </div>
          </div>

        </main>

    </div>
    <!-- /#wrapper -->

  </body>

</html>

