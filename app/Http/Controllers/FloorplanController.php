<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Floorplan;

class FloorplanController extends Controller
{
    protected $floorplan;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Floorplan $floorplan)
    {
        $this->floorplan = $floorplan;
        $this->middleware('auth');
    }
    /**
     * Show the unit index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floorplans = Floorplan::all();

        return view('floorplan.index')
            ->with('floorplans', $floorplans);
    }
}
