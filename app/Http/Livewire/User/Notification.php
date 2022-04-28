<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public $count = 0;
    public $user_id;
    public function mount($user_id) {
        if(Auth('user')->user()->type == 'owner') {
            $this->user_id = Auth('user')->user()->id;
            $this->editCount($user_id);
        } else {
            $this->user_id = $user_id;
        }
    }

    public function getListeners()
    {
        return [
            "echo:notify_{$this->user_id},notification" => 'editCount',

        ];
    }
    public function editCount($user_id) {
        $this->count = 0;
        $user = User::whereId($user_id)->first();
        $followers = $user->food_truck->followers;
        foreach($followers as $follower) {
            if($follower->pivot->readable == 0) {
                $this->count++;
            }
        }
    }
    public function render()
    {
        return view('livewire.user.notification');
    }
}
