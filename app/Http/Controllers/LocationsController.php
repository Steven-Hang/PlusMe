<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Booking;
use Auth;
use Illuminate\Pagination\Paginator;

class LocationsController extends Controller
{
    //
    public function index()
    {
        $locations = Location::paginate(35);
        return view('admin.parkinglot', compact('locations'));
    }

    public function add(){

        return view('location.location-add');

    }

    //creates location for admin 
    public function store(Request $request){
        $locations = Location::paginate(35);
        //Validate
        $location = Location::create([
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'lat' => $request->input('lat'),
            'lng' => $request->input('lng')
            ]);

        return view('admin.parkinglot', compact('locations'));
   

    }



}
