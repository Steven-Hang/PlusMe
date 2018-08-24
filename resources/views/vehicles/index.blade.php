@extends('vehicles.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>PlusMe Vehicles Data</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right"
            <p><a class="btn btn-xs btn-success" href="{{ route('vehicles.create') }}">Add New Vehicles</a></p>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Name Of Car</th>
            <th>Type</th>
            <th>No Of Seats</th>
            <th>Is Available</th>
            <th width="300px">Actions</th>
        </tr>

        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $vehicle->name_of_car }}</td>
            <td>{{ $vehicle->type }}</td>
            <td>{{ $vehicle->no_of_seats }}</td>
            <td>{{ $vehicle->isAvailable }}</td>
            <td>
                <a class="btn btn-xs btn-info" href="{{ route('vehicles.show', $vehicle->id) }}">Show</a>
                <a class="btn btn-xs btn-primary" href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route'=>['vehicles.destroy', $vehicle->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
  </table>
  {!! $vehicles->links() !!}
@endsection