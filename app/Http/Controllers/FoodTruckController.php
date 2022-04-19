<?php

namespace App\Http\Controllers;

use App\Models\FoodTruck;
use Illuminate\Http\Request;

class FoodTruckController extends Controller
{

    public function index()
    {
        $food_truck = auth('user')->user()->food_truck;
        return view('users.food_truck.index',compact('food_truck'));
    }


    public function create()
    {
        return view('users.food_truck.create');
    }

    public function menuCreate()
    {
        $foodtruck = auth('user')->user()->food_truck;
        return view('users.food_truck.add-menu', compact('foodtruck'));
    }




    public function edit()
    {
        $foodtruck = auth('user')->user()->food_truck;
        return view('users.food.edit-menu',compact('foodtruck'));
    }


    public function menuEdit()
    {
        $foodtruck = auth('user')->user()->food_truck;
        return view('users.food_truck.edit-menu', compact('foodtruck'));
    }


    public function allFoodTrucks() {
        $newfoodtrucks = FoodTruck::where('status',0)->get();
        $rejectfoodtrucks = FoodTruck::where('status',2)->get();
        $acceptfoodtrucks = FoodTruck::where('status', 1)->get();

        return view('admins.foodtrucks.all', compact('newfoodtrucks', 'rejectfoodtrucks', 'acceptfoodtrucks'));
    }

    public function showFoodTruck(Request $r)
    {
        $foodtruck = FoodTruck::whereId($r->id)->first();
        return view('admins.foodtrucks.show', compact('foodtruck'));
    }

    public function acceptFoodTruck(Request $r)
    {
        FoodTruck::whereId($r->id)->update(['status' => 1]);
        return redirect()->route('admin.foodtrucks.all');
    }

    public function rejectFoodTruck(Request $r)
    {
        FoodTruck::whereId($r->id)->update(['status'=> 2]);
        return redirect()->route('admin.foodtrucks.all');

    }


}
