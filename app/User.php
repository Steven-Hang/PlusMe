<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //create one-to-one relationship between User and Activate User
    public function activateUser()
    {
        return $this->hasOne('App\ActivateUser');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','date_of_birth','license_image','contact_number', 'email', 'password','terms'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getReferrals()
    {
        return ReferralProgram::all()->map(function ($program) {
            return ReferralLink::getReferral($this, $program);
        });
    }
}
