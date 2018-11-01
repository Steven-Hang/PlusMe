<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Booking;
use Auth;
use Illuminate\Pagination\Paginator;

class LocationsController extends Controller
{
    //show all locations stored in database
    public function index()
    {
        $qlocation= NULL;
        $locations = Location::paginate(35);
        return view('admin.parkinglot', compact('locations' , 'qlocation'));
    }

    public function add(){

        return view('location.location-add');

    }
    
public function edit($id)
{
    $location = Location::find($id);
    return view('admin.location.edit',compact('location','id'));
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

            return back();
    }
    public function searchLot(Request $request){

        $locations = Location::paginate(35);    
        $q = $request->get('q');
        $qlocation = Location::where('id','=', $q)->get()->first();

        return view('admin.parkinglot', compact('locations', 'qlocation'));
    }

    


    public function update(Request $request, $id)
    {

        $locations = Location::paginate(35);
        $location= Location::find($id);
        $location->description=$request->get('description');
        $location->address=$request->get('address');
        $location->city=$request->get('city');
        $location->state=$request->get('state');
        $location->zip=$request->get('zip');
        $location->lat=$request->get('lat');
        $location->lng=$request->get('lng');
        $location->save();
        return view('admin.parkinglot', compact('locations'));
    }

    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        return back();

    }

    public function LocationsNearMe(){

    }


}
