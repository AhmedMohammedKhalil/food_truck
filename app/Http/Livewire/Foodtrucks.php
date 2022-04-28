<?php

namespace App\Http\Livewire;

use App\Models\FoodTruck;
use Livewire\Component;

class Foodtrucks extends Component
{
    public $foodtrucks;
    public $flag = false;

    protected $listeners = [
        'showResult',
    ];
    public function showResult($foodtrucks) {
        $this->flag = true;
        if($foodtrucks) {
            $ids = [];
            foreach($foodtrucks as $f) {
                $ids[] = $f['id'];
            }
            $this->foodtrucks = FoodTruck::find($ids);
        } else {
            $this->foodtrucks = '';
        }
    }
    public function render()
    {
        $this->foodtrucks = $this->flag == true ? $this->foodtrucks : FoodTruck::all();
        return view('livewire.foodtrucks');
    }
}
