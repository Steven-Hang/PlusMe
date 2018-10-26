@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Edit Location for location id: {{$location->id}}</h1>
            </div>
            <div class="container">
        <form method="post" action="{{action('LocationsController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="description">description:</label>
            <input type="text" class="form-control" name="description" value="{{$location->description}}">
            <label for="address">address:</label>
            <input type="text" class="form-control" name="address" value="{{$location->address}}">
            <label for="city">city:</label>
            <input type="text" class="form-control" name="city" value="{{$location->city}}">
            <label for="state">state:</label>
            <input type="text" class="form-control" name="state" value="{{$location->state}}">
            <label for="zip">zip:</label>
            <input type="text" class="form-control" name="zip" value="{{$location->zip}}">
            <label for="zip">lat:</label>
            <input type="text" class="form-control" name="lat" value="{{$location->lat}}">
            <label for="zip">lng:</label>
            <input type="text" class="form-control" name="lng" value="{{$location->lng}}">
          </div>
        </div>
      
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Make Changes</button>
      
        </div>
      </form>
    </div>
        </main>

    </div>
    <!-- /#wrapper -->

  </body>

</html>