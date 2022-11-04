<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShiftsRequest;
use App\Http\Requests\UpdateShiftsRequest;
use App\Models\Shifts;

class ShiftsController extends Controller
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
     * @param  \App\Http\Requests\StoreShiftsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShiftsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function show(Shifts $shifts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function edit(Shifts $shifts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShiftsRequest  $request
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShiftsRequest $request, Shifts $shifts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shifts  $shifts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shifts $shifts)
    {
        //
    }
}
