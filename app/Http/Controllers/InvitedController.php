<?php

namespace App\Http\Controllers;

use App\Models\Invited;
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
    public function update(UpdateInvitedRequest $request, Invited $invited)
    {
        //
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
}