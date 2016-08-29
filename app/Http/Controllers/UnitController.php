<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Unit;

use Storage;

class UnitController extends Controller
{
    protected $unit;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
        $this->middleware('auth');
    }
    /**
     * Show the unit index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();

        return view('unit.index')
            ->with('units', $units);
    }
    /**
     * Show the unit edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $unit = Unit::find($request->id);
        $images = explode(',', $unit->images);

        return view('unit.edit')
            ->with('unit', $unit)
            ->with('images', $images);
    }
    /**
     * Save the unit updates
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $unit = Unit::find($request->id);
        /*
        * Update the unit's fields
        */
        $unit->unit = $request->unit;
        $unit->floor = $request->floor;
        $unit->building = $request->building;
        $unit->floorplan = $request->floorplan;
        $unit->price = $request->price;
        $unit->price_override = $request->price_override;
        $unit->available_status = $request->available_status;
        $unit->available_date = $request->available_date;
        $unit->disabled = $request->disabled;
        $unit->description = $request->description;
        $unit->images = $request->images;


        if($unit->save()) {
            $units = Unit::all();

            return view('unit.index')
                ->with('units', $units);
        } else {
            die("there was a problem saving the unit!");
        }
    }
    /**
     * Show the unit import page
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        /*
        * check for imported file
        */
        if ($request->hasFile('import') && $request->file('import')->isValid()) {
            /*
            * Open the file for reading
            */
            $file =  fopen($request->file('import')->getRealPath(), "r");
            /*
            * Start building out floorplans to insert skipping headers
            */
            $units = [];
            $first = true;
            while(!feof($file)) {
                if(!$first) {
                    $row = fgetcsv($file);
                    /*
                    * Set the importable attributes
                    */
                    $unit = new Unit;
                    $unit->external_id = $row[0];
                    $unit->unit = $row[1];
                    $unit->floor = $row[2];
                    $unit->building = "1";
                    $unit->floorplan = $row[4];
                    /*
                    * Save the unit
                    */
                    $unit->save();
                    /*
                    * Check for the floorplans existence
                    */

                } else {
                    $row = fgetcsv($file);
                    $first = false;
                }
            }
            /*
            * File processed, close file pointer
            */
            fclose($file);
            /*
            * Load up the new units and display index
            */
            $units = Unit::all();

            return view('unit.index')
                ->with('units', $units);
        } else {
            return view('unit.import');
        }
    }
}
