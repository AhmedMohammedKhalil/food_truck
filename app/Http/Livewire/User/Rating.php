<?php

namespace App\Http\Livewire\User;

use App\Models\FoodTruck;
use Livewire\Component;

class Rating extends Component
{
    public $foodtruck;
    public $rates;
    public $count_rate;
    public $rating;

    protected $listeners = [
        'showRating',
    ];

    public function mount($truckid) {
        $this->showRating($truckid);
    }

    public function showRating($truckid) {
        $this->foodtruck = FoodTruck::whereId($truckid)->first();
        $this->rates = $this->foodtruck->rates;
        $this->count_rate = $this->foodtruck->rates->count();
        $sum_rate = 0;
        foreach($this->rates as $rate) {
            $sum_rate += $rate->pivot->rate;
        }
        $this->rating = $this->count_rate  != 0 ? number_format($sum_rate / $this->count_rate) : 0;
    }

    public function render()
    {
        return view('livewire.user.rating');
    }
}
