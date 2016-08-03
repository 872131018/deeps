<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Amenity;

class AmenityController extends Controller
{
    protected $amenity;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Amenity $amenity)
    {
        $this->amenity = $amenity;
        $this->middleware('auth');
    }
    /**
     * Show the amenity index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = Amenity::all();

        return view('amenity.index')
            ->with('amenities', $amenities);
    }
    /**
     * Show the amenity edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $amenity = Amenity::find($request->id);

        return view('amenity.edit')
            ->with('amenity', $amenity);
    }
    /**
     * Save the amenity updates
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $amenity = Amenity::find($request->id);
        /*
        * Update the amenity's fields
        */
        $amenity->category = $request->category;
        $amenity->name = $request->name;
        $amenity->description = $request->description;
        $amenity->images = $request->images;


        if($amenity->save()) {
            $amenities = Amenity::all();

            return view('amenity.index')
                ->with('amenities', $amenities);
        } else {
            die("there was a problem saving the amenity!");
        }
    }
    /**
     * Delete amenity
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        if(Amenity::destroy($request->id)) {
            $amenities = Amenity::all();

            return view('amenity.index')
                ->with('amenities', $amenities);
        } else {
            die("there was a problem deleting the amenity!");
        }
    }
}
