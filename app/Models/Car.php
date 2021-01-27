<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $table = "cars";
    public $fillable = ['name', 'make', 'model', 'license_number', 'weight', 'registration_year'];
}
