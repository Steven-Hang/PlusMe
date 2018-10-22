<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use Auth;
use Mail;
use App\Location;
use Validator;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    //
    public function showPriceBasedOnHours(){
    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 9:30:34');

    $diff_in_hours = $to->diffInHours($from);

    return view('dashboard')
        ->with($diff_in_hours);
    }

    //Show booking history (for User)
        public function view(){
            $user = Auth::user();
            //show active booking
            $activeBooking = Booking::where(['user_id' => Auth::id(),
            'is_Active' => '1'])->get();

            $pastBookings = Booking::where(['user_id' => Auth::id(),
            'is_Active' => '0'])->get();

            return view('user.bookinghistory', compact('user'))->with('activeBooking', $activeBooking)->with('pastBooking', $pastBookings);
        }


    //show bookings (for admin page)
    public function Index(){
        $bookings = Booking::paginate(35);
        return view('admin.bookings', compact('bookings'));
    }

    //creates bookings for customer 
    public function createBooking(Request $request){

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $locationId = $request->input('location_id');
        $sDate = Carbon::createFromFormat('Y-m-d', $start_date);
        $eDate = Carbon::createFromFormat('Y-m-d', $end_date);
       
        $locationAddress = DB::table('locations')->where('id', $locationId)->first();
        //calculates price for a booking 
        $totalDuration = $sDate->diffInHours($eDate); 
        $price  = $totalDuration * 5; 

         $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'location_id' => 'required'
        ]);

        $bookings = Booking::create([
            'user_id' => Auth::id(),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'price' => $price,
            'location_id' => $request->input('location_id')
            ]);

        return view('booking.addons', compact('price', 'locationAddress', 'totalDuration', 'start_date', 'end_date'));
    }
    public function process(Request $request){
        
        $user = Auth::user();
        $fprice = $request->input('price');


        return view('booking.checkout', compact('user', 'fprice'));
    }

    public function completeBooking(){

        Booking::where('user_id', Auth::id())->latest()->limit(1)->update(array('is_Active' => '1'));
       
        return Redirect::to('dashboard');
    }

    public function finishBooking(){
        //Get Active Booking
        //Set Active Booking to 0


        Booking::where([
            'user_id' => Auth::id(),
            'is_Active' => '1'
        ])->latest()->limit(1)->update(array('is_Active' => '0'));

        //Redirect and Send Mail 
        return Redirect::to('dashboard');

    }
    public function extendBooking(Request $request){   
        $newEndDate  = $request->input('New_end_date');
        
        //finds Active Booking and Sets 
        $updateNewEndDate = Booking::where([
            'user_id' => Auth::id(),
            'is_Active' => '1'
        ])->latest()->limit(1)->update(array('is_Active' => '0'));
        
        /*
        $getStartDate =  
        
        $updateEndDate =

        $getDurationAdded =

        $getNewPrice =
        */
        
    }
    
    
}
