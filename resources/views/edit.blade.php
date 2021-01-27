@extends('Layouts.app')


@section('content')

    {{ Form::open(['url' => "cars/update/$car->id", 'autocomplete' => 'off']) }}

    <div class="form-group">
        <label>Name</label>
        <input name="name" type="text" class="form-control" value="{{ $car->name }}">
    </div>

    <div class="form-group">
        <label>Make</label>
        <input name="make" type="text" class="form-control" value="{{ $car->make }}">
    </div>

    <div class="form-group">
        <label>Model</label>
        <input name="model" type="text" class="form-control" value="{{ $car->model }}">
    </div>

    <div class="form-group">
        <label>License Number</label>
        <input name="license_number" type="text" class="form-control" value="{{ $car->license_number }}">
    </div>

    <div class="form-group">
        <label>Weight</label>
        <input name="weight" type="number" class="form-control" value="{{ $car->weight }}">
    </div>

    <div class="form-group">
        <label>Registration Year</label>
        <input name="registration_year" type="number" step="any" class="form-control" value="{{ $car->registration_year }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-danger" href="/">Back</a>

    {{ Form::close() }}

@endsection
