@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
        @include('layouts.partials.adminsidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Users</h1>
                <div class="input-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>

<table class="table table-sm">
    <thead>
    {{ $users->links() }}
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Cpntact Number</th>
        <th>Email</th>
        <th>Licence Number</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['last_name']}}</td>
        <td>{{$user['date_of_birth']}}</td>
        <td>{{$user['contact_number']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['licence_number']}}</td>

        <td><a href="{{action('UserController@edit', $user['id'])}}" class="">Edit</a></td>
        <td>
          <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
        </main>

    </div>
    <!-- /#wrapper -->

  </body>

</html>
