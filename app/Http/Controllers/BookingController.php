<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    //
    public function showPriceBasedOnHours(){
    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 9:30:34');
    
    $diff_in_hours = $to->diffInHours($from);

    return view('home')
        ->with($diff_in_hours);
    }

    //Show booking history (for User)
        public function view(){

            //show active booking
            $activeBooking = Booking::where('is_Active','=','1');
            
            $pastBookings = Booking::where('is_Active', '=', '0'); 
    
            return view('')->with('activeBooking', $activeBooking)->with('pastBooking');
        }
    

    
}
