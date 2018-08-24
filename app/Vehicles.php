<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    //
    protected $table = 'vehicles';
    protected $fillable = ['name_of_car','type','no_of_seats','isAvailable'];
}
