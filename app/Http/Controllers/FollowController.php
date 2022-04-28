<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Http\Requests\StoreFollowRequest;
use App\Http\Requests\UpdateFollowRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function followers() {

        $followers = Auth::guard('user')->user()->food_truck->followers;
        foreach($followers as $f) {
            $f->pivot->update(['readable' => 1]);
        }
        return view('users.followers.index',compact('followers'));
    }

    public function show(Request $r) {
        $userInfo = User::whereId($r->id)->first();
        return view('users.followers.show',compact('userInfo'));
    }

    public function followings() {
        $foodtrucks = Auth::guard('user')->user()->followings;
        return view('users.followings.index',compact('foodtrucks'));

    }
}
