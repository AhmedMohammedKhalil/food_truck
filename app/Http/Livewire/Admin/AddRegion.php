<?php

namespace App\Http\Livewire\Admin;

use App\Models\Region;
use Livewire\Component;

class AddRegion extends Component
{
    public $name;
    protected $rules = [
        'name' => ['required','max:50']
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الأكثر من 50 خانة',
    ];

    public function add() {
        $validatedData = $this->validate();
        Region::create($validatedData);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.regions.index');
    }
    public function render()
    {
        return view('livewire.admin.add-region');
    }
}
