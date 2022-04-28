<?php

namespace App\Http\Controllers;

use App\Models\TruckLocation;
use App\Http\Requests\StoreTruckLocationRequest;
use App\Http\Requests\UpdateTruckLocationRequest;
use Illuminate\Http\Request;

class TruckLocationController extends Controller
{
    public function create() {
        return view('users.food_truck.add-location');
    }


    public function edit(Request $r) {
        $location = TruckLocation::whereId($r->id)->first();
        return view('users.food_truck.edit-location',compact('location'));
    }
}
