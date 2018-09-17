<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //function to return the welcome view
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('general.about');
    }

    public function faq(){
        return view('general.faq');
    }

    public function policy(){
        return view('general.policy');
    }

    public function admin(){
        return view('admin.dashboard');
    }

    public function profile(){
        return view('user.profile');
    }

    public function bookinghistory(){
        return view('user.uhistory');
    }

    public function messagebox(){
        return view('user.umessagebox');
    }

    public function step2(){
        return view('booking.step2');
    }

    public function step3(){
        return view('booking.step3');
    }

    public function checkout(){
        return view('booking.checkout');
    }

    public function dashboard(){
        return view('user.dashboard');
    }

    public function pagenotfound(){
        return view('errors.404');
    }

    public function forbidden(){
        return view('errors.403');
    }

    //test use only will delete later
    public function admindashboard(){
        return view('admin.dashboard');
    }

    public function bookings(){
        return view('admin.bookings');
    }

    public function vehicles(){
        return view('admin.vehicles');
    }

    public function users(){
        return view('admin.users');
    }

    public function parkinglot(){
        return view('admin.parkinglot');
    }
    public function notification(){
        return view('admin.notification');
    }
    public function adminprofile(){
        return view('admin.adminprofile');
    }
}
