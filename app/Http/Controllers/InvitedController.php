<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Invited;
use Illuminate\Http\Request;
use App\Imports\InviteImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreInvitedRequest;
use App\Http\Requests\UpdateInvitedRequest;

class InvitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvitedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvitedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function show(Invited $invited)
    {
        //
        return "You are invited";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function edit(Invited $invited)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvitedRequest  $request
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvitedRequest $request, $invited)
    {
        //
        $invited = Invited::findOrFail($invited);
        $invited = $invited->fill($request->all());
        $invited->save();
        return $invited;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invited  $invited
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invited $invited)
    {
        //
    }
    public function import(Request $req)
    {

        $imports =  Excel::import(new InviteImport, request()->file('import'));
        $event = Event::findOrFail($req->event_id);
        $invited = Invited::with('response')->where('event_id', $req->event_id)->paginate(100);
        return redirect()->route('events.show', $req->event_id)->with([]);
    }
}
