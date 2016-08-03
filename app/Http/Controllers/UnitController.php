<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Unit;

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
}
