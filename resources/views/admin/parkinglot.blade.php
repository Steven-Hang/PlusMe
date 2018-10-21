@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Parking lot</h1>
                <div class="input-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LocationModal">Add Location</button>
                    
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="background-color:white;opacity:0.98;">
            <table class="table table-sm">
              <thead>
                <tr>
                  {{ $locations->links() }}
                  <th>ID</th>
                  <th>Description</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Postcode</th>
                </tr>
              </thead>
              <tbody>
                @foreach($locations as $location)
                <tr>
                    <td>{{$location->id}}</td>
                    <td>{{$location->description}}</td>
                    <td>{{$location->address}}</td>
                    <td>{{$location->city}}</td>
                    <td>{{$location->state}}</td>
                    <td>{{$location->zip}}</td>

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
              </tbody>
            </table>

      </div>
      <!-- table -->
      <div class="modal fade" id="LocationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LocationModalLabel">Add Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('Location.store') }}"  >
          <div class="form-group" >
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">State</label>
            <input type="text" class="form-control" id="state" name="state">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">postcode</label>
            <input type="text" class="form-control" id="postcode" name="zip">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">latitude</label>
            <input type="float" class="form-control" id="latitude" name="lat">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">longitude</label>
            <input type="float" class="form-control" id="longitude" name="lng">
          </div>
                <button type="submit" class="btn btn-primary">Add Location</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> 
      </div>
      
    </div>
  </div>
</div>




    </main>

</div>
<!-- /#wrapper -->

</body>

</html>

