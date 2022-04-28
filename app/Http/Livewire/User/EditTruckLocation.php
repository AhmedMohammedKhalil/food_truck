<?php

namespace App\Http\Livewire\User;

use App\Models\Region;
use App\Models\TruckLocation;
use Livewire\Component;

class EditTruckLocation extends Component
{
    public $regions;
    public $region_id;
    public $block;
    public $streat;
    public $house;
    public $location;
    public $l_id;

    public function mount($location) {
        $this->location = $location;
        $this->l_id = $location->id;
        $this->block = $location->block;
        $this->streat = $location->streat;
        $this->house = $location->house;
        $this->region_id = $location->region_id;

    }
    protected $rules = [
        'block' => ['required', 'string'],
        'streat' => ['required', 'string'],
        'house' => ['required', 'string'],
    ];

    public function updatedRegionId() {
        $validatedata = $this->validate(
            ['region_id' => ['required','gt:0']],

        );
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function edit() {
        $validatedata = $this->validate();
        if($this->region_id != $this->location->region_id) {
            $this->updatedRegionId();
            $data = array_merge(
                $validatedata,
                ['region_id' => $this->region_id]
            );
        }
        TruckLocation::whereId($this->l_id)->update($data);
        session()->flash('message', "تم تعديل مكان العربة بنجاح");
        return redirect()->route('user.food_truck.index');

    }
    public function render()
    {
        $this->regions = Region::all();
        return view('livewire.user.edit-truck-location');
    }
}
