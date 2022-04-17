<?php

namespace App\Http\Controllers;

use App\Models\FoodTruck;
use App\Http\Requests\StoreFoodTruckRequest;
use App\Http\Requests\UpdateFoodTruckRequest;

class FoodTruckController extends Controller
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
     * @param  \App\Http\Requests\StoreFoodTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function show(FoodTruck $foodTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodTruck $foodTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodTruckRequest  $request
     * @param  \App\Models\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodTruckRequest $request, FoodTruck $foodTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodTruck  $foodTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodTruck $foodTruck)
    {
        //
    }
}
