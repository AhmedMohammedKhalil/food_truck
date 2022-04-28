<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rate extends Component
{

    public $user_rate = 1;
    public $truckId;
    public function mount($truckid) {
        $this->truckId = $truckid;
    }
    protected $rules = [
        'user_rate' => 'required|numeric'
    ];

    public function makeRate() {
        $user = User::find(Auth::guard('user')->user()->id);
        $user->rates()->detach($this->truckId);
        $user->rates()->attach($this->truckId,['rate' => $this->user_rate]);
        $this->emitTo(Rating::class,'showRating',$this->truckId);
    }

    public function plus() {
        if($this->user_rate < 5)
            $this->user_rate++;
    }

    public function minus() {
        if($this->user_rate > 0)
            $this->user_rate--;
    }

    public function render()
    {
        return view('livewire.user.rate');
    }
}
