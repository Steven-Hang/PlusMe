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
            $activeBooking = Booking::where('is_Active','=','1')->get();

            $pastBookings = Booking::where('is_Active','=','0')->get();

            return view('user.bookinghistory')
                    ->with('activeBooking', $activeBooking)
                    ->with('pastBooking', $pastBookings);
        }

        public function store(Request $request){
            $validator = Validator::make($request->all(), [
                'start_date' => 'required',
                'end_date' => 'required',
                'price' =>' required'


            ]);

            Booking::create([
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'price'
            ]);



        }



}
