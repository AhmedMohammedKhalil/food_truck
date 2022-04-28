<?php

namespace App\Http\Livewire;

use App\Models\FoodTruck;
use App\Models\Region;
use App\Models\TruckLocation;
use Livewire\Component;

class Search extends Component
{
    public $regions;
    public $search;
    public $foodtrucks;


    public function makeSearch() {
        if($this->search != "") {
            $this->foodtrucks = FoodTruck::where('name','like','%'.$this->search.'%')->get();
        } else {
            $this->foodtrucks = FoodTruck::all();
        }
        $this->emitTo(Foodtrucks::class,'showResult',$this->foodtrucks);

    }

    public function searchByRegion($id) {
        $this->foodtrucks = FoodTruck::whereHas('location', function($query) use ($id){
                                $query->where('region_id', $id);
                            })->get();
        $this->search = "";
        $this->emitTo(Foodtrucks::class,'showResult',$this->foodtrucks);

    }
    public function render()
    {
        $this->regions = Region::all();
        return view('livewire.search');
    }
}
