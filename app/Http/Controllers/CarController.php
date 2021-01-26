<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('index')->with('cars', $cars);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'make' => 'required',
            'model' => 'required',
            'license_number' => 'required',
            'weight' => 'required',
            'registration_year' => 'required'
        ]);

        Car::create([
            'name' => $request->input('name'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'license_number' => $request->input('license_number'),
            'weight' => $request->input('weight'),
            'registration_year' => $request->input('registration_year')
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::where('id', $id)->get()[0];
        return view('edit')->with('car', $car);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'make' => 'required',
            'model' => 'required',
            'license_number' => 'required',
            'weight' => 'required',
            'registration_year' => 'required'
        ]);

        Car::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'license_number' => $request->input('license_number'),
            'weight' => $request->input('weight'),
            'registration_year' => $request->input('registration_year')
        ));

        return redirect('/');
    }

    public function destroy($id)
    {
        Car::where('id', $id)->delete();
        return redirect('/');
    }
}
