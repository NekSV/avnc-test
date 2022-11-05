<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTurnsRequest;
use App\Http\Requests\UpdateTurnsRequest;
use App\Models\Turns;

class TurnsController extends Controller
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
     * @param  \App\Http\Requests\StoreTurnsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurnsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function show(Turns $turns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function edit(Turns $turns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurnsRequest  $request
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurnsRequest $request, Turns $turns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turns $turns)
    {
        //
    }
}
