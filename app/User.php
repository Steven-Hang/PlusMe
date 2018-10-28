<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;
    use Messagable;


    //create one-to-one relationship between User and Activate User
    public function activateUser()
    {
        return $this->hasOne('App\ActivateUser');
    }
     //create relationship between User and booking
    public function UserBooking()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','date_of_birth','licence_number','contact_number', 'email', 'password','terms','is_admin', 'avatar'
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

    public function isAdmin(){
        return $this->is_admin;
    }
     /**
     * Send the password reset notification.
     * @note: This override Authenticatable methodology
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
