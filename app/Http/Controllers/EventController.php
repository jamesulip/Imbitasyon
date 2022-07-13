<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::where('created_by', auth()->id())->get();
        return Inertia::render('Events/Index')->with(['events' => $events]);
    }
    public function create()
    {
        //
        $events = Event::where('created_by', auth()->id())->get();
        return Inertia::render('Events/Create')->with(['events' => $events]);
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
        $event = new Event();
        $event->fill($request->all());
        $event->created_by = 1;
        $event->save();
        return $event;
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
        $event = Event::with('invited.response')->findOrFail($id);
        return Inertia::render('Events/Show')->with(['pEvent' => $event]);
    }
    public function edit($id)
    {
        //
        $event = Event::findOrFail($id);
        return Inertia::render('Events/Show')->with(['pEvent' => $event]);
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
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect()->route('events.show', $event->id);
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
    }
}
