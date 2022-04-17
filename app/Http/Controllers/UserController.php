<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('users.auth.login');
    }


    public function showRegister()
    {
        return view('users.auth.register');
    }


    public function profile()
    {
        return view('users.profile');
    }

    public function settings()
    {
        return view('users.auth.settings');
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
