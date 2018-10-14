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


    public function store(Request $request){

        //Validate
        $request->validate([
            'description' => 'required|min:3',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);
        
        $locations = Location::create([
            'description' => $data['description'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'lat' => $data['lat'],
            'lng' => $data['lng']
            ]);

        return redirect()->back();

    }



}
