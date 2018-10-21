<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Booking;

class Location extends Model
{
    //
    protected $fillable= ['description', 'address','city','city','state','zip','lat','lng'];

    //create Model Relationship
    public function locationBooking()
    {
        return $this->hasMany('App\Booking');
    }
}
