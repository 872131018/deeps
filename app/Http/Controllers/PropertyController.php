<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Property;

class PropertyController extends Controller
{
    protected $property;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Property $property)
    {
        $this->property = $property;
        $this->middleware('auth');
    }
    /**
     * Show the property index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::find(1);

        return view('property.index')
            ->with('property', $property);
    }
    /**
     * Show the property edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $property = Property::find(1);

        return view('property.edit')
            ->with('property', $property);
    }
    /**
     * Save the property updates
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $property = Property::find(1);
        /*
        * Update the property's fields
        */
        $property->name = $request->name;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->state = $request->state;
        $property->zip = $request->zip;
        $property->phone = $request->phone;
        $property->slug = $request->slug;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->url = $request->url;
        $property->availability_username = $request->availability_username;
        $property->availability_password = $request->availability_password;
        $property->availability_identifier = $request->availability_identifier;
        $property->availability_provider = $request->availability_provider;
        $property->availability_structure = $request->availability_structure;
        $property->cms_logo = $request->cms_logo;
        $property->cms_image = $request->cms_image;

        if($property->save()) {
            return view('property.index')
                ->with('property', $property);
        } else {
            die("there was a problem saving the property");
        }
    }
}
