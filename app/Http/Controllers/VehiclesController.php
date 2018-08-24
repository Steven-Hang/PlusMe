<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicles;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles = Vehicles::latest()->paginate(5);
        return view('vehicles.index', compact('vehicles'))->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name_of_car' => 'required',
            'type' => 'required',
            'no_of_seats' => 'required',
            'isAvailable' => 'required',
          ]);
          Vehicles::create($request->all());
          return redirect()->route('vehicles.index')->with('success','Vehicle created successfully');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vehicle = Vehicles::find($id);
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vehicle = Vehicles::find($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'name_of_car' => 'required',
            'type' => 'required',
            'no_of_seats' => 'required',
            'isAvailable' => 'required',
          ]);
          Vehicles::find($id)->update($request->all());
          return redirect()->route('vehicles.index')->with('success','Vehicle updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vehicles::find($id)->delete();
        return redirect()->route('vehicles.index')->with('success','Vehicle deleted successfully');
    }
}
