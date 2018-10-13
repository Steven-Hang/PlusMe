<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;

class Booking extends Model
{
    //
    protected $fillable = ['start_date','end_date','price','user_id','location_id'];
    
    //Create Model Relationships 
    public function bookingUser(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function bookingLocation(){
        return $this->belongsTo(Location::class, 'location_id');
    }

}
