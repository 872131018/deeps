<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;

class EventController extends Controller
{
    protected $event;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
        $this->middleware('auth');
    }
    /**
     * Show the event index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('event.index')
            ->with('events', $events);
    }
    /**
     * Show the event edit page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $event = Event::find($request->id);

        return view('event.edit')
            ->with('event', $event);
    }
    /**
     * Save the event updates
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $event = Event::find($request->id);
        if(!$event) {
            $event = $this->event;
        }
        /*
        * Update the location's fields
        */
        $event->category = $request->category;
        $event->name = $request->name;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->address = $request->address;
        $event->city = $request->city;
        $event->state = $request->state;
        $event->zip = $request->zip;
        $event->phone = $request->phone;
        $event->images = $request->images;
        $event->latitude = $request->latitude;
        $event->longitude = $request->longitude;
        $event->url = $request->url;
        $event->start_date = $request->start_date;
        $event->start_time = $request->start_time;
        $event->end_date = $request->end_date;
        $event->end_time = $request->end_time;

        if($event->save()) {
            $events = Event::all();

            return view('event.index')
                ->with('events', $events);
        } else {
            die("there was a problem saving the location!");
        }
    }
    /**
     * Delete event
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        if(Event::destroy($request->id)) {
            $events = Event::all();

            return view('event.index')
                ->with('events', $events);
        } else {
            die("there was a problem deleting the location!");
        }
    }
    /**
     * Show the event add page
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('event.add');
    }
}
