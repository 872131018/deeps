<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Location;

class LocationController extends Controller
{
    protected $location;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Location $location)
    {
        $this->location = $location;
        $this->middleware('auth');
    }
    /**
     * Show the location index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();

        return view('location.index')
            ->with('locations', $locations);
    }
    /**
     * Show the location edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $location = Location::find($request->id);

        return view('location.edit')
            ->with('location', $location);
    }
    /**
     * Save the location updates
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $location = Location::find($request->id);
        /*
        * Update the location's fields
        */
        $location->category = $request->category;
        $location->name = $request->name;
        $location->address = $request->address;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->zip = $request->zip;
        $location->phone = $request->phone;
        $location->fax = $request->fax;
        $location->url = $request->url;
        $location->latitude = $request->latitude;
        $location->longitude = $request->longitude;

        if($location->save()) {
            $locations = Location::all();

            return view('location.index')
                ->with('locations', $locations);
        } else {
            die("there was a problem saving the location!");
        }
    }
    /**
     * Delete location
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        if(Location::destroy($request->id)) {
            $locations = Location::all();

            return view('location.index')
                ->with('locations', $locations);
        } else {
            die("there was a problem deleting the location!");
        }
    }
}
