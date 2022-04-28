<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\FoodTruck;
use App\Models\Region;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AdminController extends Controller
{





    public function showLogin()
    {
        return view('admins.auth.login');
    }

    public function dashboard()
    {
        $usersCount = User::all()->count();
        $regionsCount = Region::all()->count();
        $trucksCount = FoodTruck::all()->count();

        return view('admins.dashboard',compact('usersCount','regionsCount','trucksCount'));
    }

    public function profile()
    {
        return view('admins.profile');
    }

    public function settings()
    {
        return view('admins.auth.settings');
    }

    public function showUsers() {
        $users = User::all();
        return view('admins.users.index',compact('users'));
    }

    public function getUser(Request $r) {
        $userInfo = User::whereId($r->id)->first();
        return view('admins.users.show',compact('userInfo'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }



}
