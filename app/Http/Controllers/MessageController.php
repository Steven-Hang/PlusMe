<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;


class MessageController extends Controller
{
//
public function getUserMessagesNotifications(Request $request){
    $notifications = Message::where('is_read', 0)
    ->where('receiver_id', $request->user()-id)
    ->orderBy('created_by', 'desc')
    ->get();

    return response(['data' => $notifications], 200);
}

public function getMessages(Request $request){
    $message = Message::where('receiver_id', $request->user()->id)
    ->orderBy('created_at', 'desc')
    ->get();

    return response(['data' => $message], 200);
}

public function getMessagesById(Request $request){
    $message = Message::where('id', $request->imput('id'))->first();

    //change is_read from not read to read
    if ($message->is_read == 0){
        $message->is_read = 1;
        $message->save();
    }

    return response(['data' => $message], 200);
}

public function getMessagesBySent(Request $request){
    
    $message = Message::where('sender_id', $request->user()->id)
    ->orderBy('created_at', 'desc')
    ->get();

    return response(['data' => $message], 200);
}

public function sendMessage(Request $request){
    
    $attributes = [
        'sender_id' => $request->input('sender_id'),
        'receiver_id' => $request->input('receiver_id'),
        'title' => $request->input('title'),
        'message' => $request->input('message'),
        'is_read' => 0
    ];

    $message = Message::create($attributes);
    $data = Message::where('id', $message->id)->first();

    return response(['data' => $data], 201);
}





}
