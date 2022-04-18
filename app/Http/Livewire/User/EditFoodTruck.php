<?php

namespace App\Http\Livewire\User;

use App\Models\FoodTruck;
use App\Models\Image;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class EditFoodTruck extends Component
{
    use WithFileUploads;

    public $name, $license_no, $phone, $description,$image, $worktime, $foodtruck, $ft_id;

    public function mount($foodtruck) {
        $this->foodtruck = $foodtruck;
        $this->ft_id = $foodtruck->id;
        $this->name = $foodtruck->name;
        $this->phone = $foodtruck->phone;
        $this->description = $foodtruck->description;
        $this->worktime = $foodtruck->worktime;
        $this->facebook = $foodtruck->facebook;
        if($foodtruck->status == 2)
            $this->license_no = $foodtruck->license_no;
    }

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:8', 'max:8'],
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
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا'

    ];

    public function updatedImage()
    {
        $validatedata = $this->validate(
            ['image' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }

    public function updatedLicenseNo()
    {
        $validatedata = $this->validate(
            ['license_no' => 'required|string|unique:food_trucks,license_no'],
        );
    }

    public function updatedFacebook()
    {
        $regex = '/^(https?:\/\/)?www\.facebook\.com\/([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $validatedata = $this->validate(
            ['facebook' => 'required|regex:'.$regex ],
        );
    }

    public function edit()
    {
        $validatedata = $this->validate();
        if($this->facebook) {
            $this->updatedFacebook();
            $validatedata = array_merge(
                $validatedata,
                ['facebook' => $this->facebook]
            );
        }
        if($this->license_no) {
            $this->updatedLicenseNo();
            $validatedata = array_merge(
                $validatedata,
                [
                    'license_no' => $this->license_no,
                    'status' => 0
                ]
            );
        }
        FoodTruck::whereId($this->ft_id)->update($validatedata);
        if($this->image) {
            $this->updatedImage();
            $imagename = $this->image->getClientOriginalName();
            Image::updateOrCreate(
                ['ft_id' => $this->ft_id, 'image_type' => 'logo'],
                ['path' => $imagename]
            );
            $dir = public_path('assets/img/foodtrucks/' . $this->ft_id. '/logo');
            if (!file_exists(public_path('assets/img/foodtrucks/' . $this->ft_id)))
                mkdir(public_path('assets/img/foodtrucks/' . $this->ft_id));
            if (file_exists($dir))
                File::deleteDirectories($dir);
            else {
                mkdir($dir);
            }
            $this->image->storeAs('foodtrucks/' . $this->ft_id.'/logo', $imagename);
            File::deleteDirectory(public_path('assets/img/livewire-tmp'));
        }
        session()->flash('message', "تم تعديل العربة بنجاح");
        return redirect()->route('user.food_truck.index');
    }

    public function render()
    {
        return view('livewire.user.edit-food-truck');
    }
}
