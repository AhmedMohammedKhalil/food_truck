<?php

namespace App\Http\Controllers;

use App\Models\FoodTruck;

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



}
