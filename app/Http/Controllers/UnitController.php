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
                    $this->unit->external_id = $row[0];
                    $this->unit->unit = $row[1];
                    $this->unit->floor = $row[2];
                    $this->unit->building = "1";
                    $this->unit->floorplan = $row[4];
                    var_dump($this->unit); die;
                } else {
                    $row = fgetcsv($file);
                    $first = false;
                }
            }
            fclose($file);
            var_dump($file);
            die("heres");
        } else {
            return view('unit.import');
        }
    }
}
