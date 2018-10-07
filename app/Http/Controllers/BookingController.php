<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Pagination\Paginator;

class BookingController extends Controller
{
    //
    public function showPriceBasedOnHours(){
    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 9:30:34');
    $diff_in_hours = $to->diffInHours($from);
    print_r($diff_in_hours);
    }

    public function Index(){
        $bookings = Booking::paginate(35);
        return view('admin.bookings', compact('bookings'));
    }
}
