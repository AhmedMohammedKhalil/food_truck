<?php

namespace App\Http\Livewire\User;

use App\Events\notification;
use App\Models\FoodTruck;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Follow extends Component
{
    public $truckId;
    public $foodtruck;
    public $user;
    public $follow;
    public $text;
    public function mount($truckid) {
        $this->truckId = $truckid;
        $this->foodtruck = FoodTruck::whereId($truckid)->first();
        $this->user = User::whereId(Auth::guard('user')->user()->id)->first();
        foreach($this->user->following as $following) {
            if($following->pivot->ft_id == $this->truckId) {
                $this->follow = $following;
            }
        }
        if($this->follow != "") {
            $this->text = "إلغاء المتابعة";
        } else {
            $this->text = "متابعة";
        }
    }


    public function editFollowing() {
        //dd($this->user);

        if($this->text == 'متابعة') {
            $this->user->following()->attach($this->truckId);
            $this->text = "إلغاء المتابعة";
        } else {

            $this->user->following()->detach($this->truckId);
            $this->text = "متابعة";
        }

        event(new notification($this->foodtruck->owner->id));


    }

    public function render()
    {
        return view('livewire.user.follow');
    }
}
