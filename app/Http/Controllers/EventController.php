<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreEventRequest;
use App\Models\Invited;
use App\Models\Response;
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
        $event = Event::with('invited')->findOrFail($id);
        $reponse_group = Invited::groupBy('response_id')->with('response')
            ->selectRaw('sum(
            CASE
                WHEN response_id = 1
                THEN attending
                ELSE 0
            END
        ) as total_attendee,count(*) as respondent, response_id')
            ->get();
        $dashboardData = [
            'total_attendees' => $event->invited->where('response_id', Response::GOING)->sum('attending'),
            'reponses' => $reponse_group
        ];

        // $dashboardData = Invited::groupBy('response_id')->with('response')
        //     ->selectRaw('sum(
        //     CASE
        //         WHEN response_id = 1
        //         THEN attending
        //         ELSE 0
        //     END
        // ) as total_attendee,count(*) as respondent, response_id')
        //     ->get();


        $invited = Invited::with('response')->where('event_id', $id)
            ->when(request()->has('response_id'), function ($query) {
                $query->where('response_id', request('response_id'));
            })
            ->paginate(100);

        return Inertia::render('Events/Show')->with(['dashboard' => $dashboardData, 'pEvent' => $event, 'invited' => $invited]);
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
