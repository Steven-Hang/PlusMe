<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivateUser extends Model
{
    //create relationship between user_id and User ID
    //https://www.5balloons.info/user-email-verification-and-account-activation-in-laravel-5-5/
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
