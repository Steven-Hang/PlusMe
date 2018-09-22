<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
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


    }



}
