<?php

namespace App\Http\Livewire\User;

use App\Models\FoodTruck;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddFoodTruck extends Component
{
    public $name, $license_no, $phone, $description, $worktime;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8', 'max:8'],
        'license_no' => 'required|string|unique:food_trucks,license_no',
        'phone' => ['required', 'string', 'min:8'],
        'description' => ['required', 'string'],
        'worktime' => ['required', 'string'],

    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'phone.max' => 'لابد ان يكون الحقل لايزيد عن 8',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'license_no.unique' => 'رقم الترخيص موجود فى الموقع',

    ];

    public function add()
    {
        $validatedData = $this->validate();
        $data = array_merge(
            $validatedData,
            [
                'user_id' => auth('user')->user()->id
            ],
        );
        FoodTruck::create($data);
        session()->flash('message', "تم إضافة العربة بنجاح");
        return redirect()->route('user.food_truck.index');

    }

    public function render()
    {
        return view('livewire.user.add-food-truck');
    }
}
