<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Name Of Car : </strong>
      {!! Form::text('name_of_car', null, ['placeholder'=>'Name Of Car','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Type : </strong>
      {!! Form::text('type', null, ['placeholder'=>'Type','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>No Of Seats : </strong>
      {!! Form::text('no_of_seats', null, ['placeholder'=>'No Of Seats','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Available : </strong>
      {!! Form::text('isAvailable', null, ['placeholder'=>'Available','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('vehicles.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>