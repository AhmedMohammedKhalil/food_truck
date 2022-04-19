<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
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
        return view('admins.dashboard');
    }

    public function profile()
    {
        return view('admins.profile');
    }

    public function settings()
    {
        return view('admins.auth.settings');
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }



}
