@extends('Layouts.app')

@section('content')

    {{ Form::open(['action' => '\App\Http\Controllers\CarController@store', 'autocomplete' => 'off']) }}

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Make</label>
            <input name="make" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Model</label>
            <input name="model" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>License Number</label>
            <input name="license_number" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Weight</label>
            <input name="weight" type="number" value="1000" class="form-control">
        </div>

        <div class="form-group">
            <label>Registration Year</label>
            <input name="registration_year" type="number" step="any" value="2000" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-danger" href="/">Back</a>

    {{ Form::close() }}

@endsection
