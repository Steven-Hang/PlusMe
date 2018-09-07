@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wrapper">
            @include('layouts.partials.adminsidebar')
        <h2>Data</h2>
        <div class="row">
            <div class="col-sm-8 col-sm-push-8" style="background-color:lavender;">
                <select>
                    <option value="booking">Booking</option>
                    <option value="user">User</option>
                    <option value="car">Car</option>
                    <option value="location">Location</option>
                  </select>
                <input class="form-control ondemand-typeahead" type="text" placeholder="Search by id" />
                <button type="button" class="button" >Search</button>
            </div>
            <div class="col-sm-4 col-sm-pull-4" style="background-color:lavenderblush;">
                <button type="button" class="button" onclick="addNewRecord()">Add new record</button>
                <button type="button" class="button">Delete selected record</button>
            </div>
        </div>

        <script>
            function addNewRecord() {
                var txt;
                var type = prompt("Please enter type of new car:", "");
                var txt;

                if (confirm("Add New Record")) {
                    txt = "Added";
                } else {
                    txt = "Cancelled!";
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script>

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>booking time</th>
              <th>return time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>0003</td>
              <td>30/08/2018</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>0002</td>
              <td>20/08/2018</td>
              <td>27/08/2018</td>
            </tr>
            <tr>
              <td>0001</td>
              <td>15/08/2018</td>
              <td>17/08/2018</td>
            </tr>
          </tbody>
        </table>
      </div>
    @include('layouts.partials.footer');
</div>
@endsection
