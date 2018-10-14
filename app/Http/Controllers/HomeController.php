<?php

namespace App\Http\Controllers;
use App\User;
use App\Location;
use App\Booking;
use Illuminate\Support\Facades\DB;
use Auth;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //outputs locations for the google map api to place in as 
        $locations = Location::all();
        //returns profile picture for a user 
        $userprofile = $user = DB::table('users')->where('id', Auth::id())->value('avatar');
        $UserActiveBooking = DB::table('bookings')->where([
            'is_Active' => 1 ,
            'user_id' => Auth::id()])->first();
        return view('home', compact('users','locations','userprofile', 'UserActiveBooking'));
    }
}
