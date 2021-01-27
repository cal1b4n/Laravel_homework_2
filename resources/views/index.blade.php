@extends('Layouts.app')


@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Model</th>
                <th scope="col">License N.</th>
                <th scope="col">Weight</th>
                <th scope="col">Reg. Year</th>
                <th scope="col">Age</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($cars))
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->license_number }}</td>
                        <td>{{ $car->weight }}</td>
                        <td>{{ $car->registration_year }}</td>
                        <td>{{ date('Y') - $car->registration_year }}</td>
                        <td>
                            <a href="/cars/edit/{{ $car->id }}" class="btn btn-info">Edit</a>
                            <a href="/cars/destroy/{{ $car->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <a href="/cars/create" class="btn btn-info">Add Car</a>

@endsection
