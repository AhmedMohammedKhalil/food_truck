<?php

namespace App\Http\Controllers;

use App\Models\TruckLocation;
use App\Http\Requests\StoreTruckLocationRequest;
use App\Http\Requests\UpdateTruckLocationRequest;

class TruckLocationController extends Controller
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
     * @param  \App\Http\Requests\StoreTruckLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTruckLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TruckLocation  $truckLocation
     * @return \Illuminate\Http\Response
     */
    public function show(TruckLocation $truckLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TruckLocation  $truckLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(TruckLocation $truckLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTruckLocationRequest  $request
     * @param  \App\Models\TruckLocation  $truckLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTruckLocationRequest $request, TruckLocation $truckLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TruckLocation  $truckLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TruckLocation $truckLocation)
    {
        //
    }
}
