<?php

namespace App\Http\Livewire\User;

use App\Models\Region;
use App\Models\TruckLocation;
use Livewire\Component;

class AddTruckLocation extends Component
{
    public $regions;
    public $region_id;
    public $block;
    public $streat;
    public $house;
    public $ft_id;


    protected $rules = [
        'region_id' => ['required','gt:0'],
        'block' => ['required', 'string'],
        'streat' => ['required', 'string'],
        'house' => ['required', 'string'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
    ];

    public function add() {
        $this->ft_id = auth('user')->user()->food_truck->id;
        $validatedata = $this->validate();
        $data = array_merge(
            $validatedata,
            ['ft_id' => $this->ft_id]
        );
        TruckLocation::create($data);
        session()->flash('message', "تم إضافة مكان العربة بنجاح");
        return redirect()->route('user.food_truck.index');

    }
    public function render()
    {
        $this->regions = Region::all();
        return view('livewire.user.add-truck-location');
    }
}
