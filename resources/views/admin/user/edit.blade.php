@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Edit User: {{$user->first_name}} {{$user->last_name}}</h1>
            </div>
            <div class="container">
        <form action="{{action('UserController@userUpdate', $id)}}">
   
        <input name="_method" type="hidden" value="PATCH">
          <div class="form-group col-md-4">
            <label for="description">Ban 1 for yes 0 for No</label>
            <input type="text" class="form-control" name="isBan">
          </div>
            <button type="submit" class="btn btn-success">Make Changes</button>
      
    
      </form>
    </div>
        </main>

    </div>
    <!-- /#wrapper -->

  </body>

</html>