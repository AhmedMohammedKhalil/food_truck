<?php

namespace App\Http\Controllers;

use App\Models\FoodTruck;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foodtrucks = FoodTruck::where('status',1)->get();
        return view('home',compact('foodtrucks'));
    }

    public function showtruckDetails(Request $r) {
        $foodtruck = FoodTruck::whereId($r->id)->first();
        return view('truckdetails', compact('foodtruck'));
    }
}
