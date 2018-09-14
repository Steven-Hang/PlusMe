<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Message extends Model
{
    //
    protected $fillable = [
        'sender_id', 'receiver_id', 'title', 'message', 'is_read'
    ];

    protected $appends = ['sender', 'receiver'];

    
    //get timestamps of messages 
    public function getCreatedAtTime($value){
        return Carbon::parse($value)->diffForHumans();
    }

    //get User ID of the sender of the message
    public function getSenderId(){
        return User::where('id', $this->sender_id)->first();
    }
    //get User ID of the receiver of the message 
    public function getReceiverId(){
        return User::where('id', $this->receiver_id)->first();
    }

}
