<?php

namespace App\Http\Livewire\User;

use App\Models\Image;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddMenuPhotos extends Component
{
    use WithFileUploads;

    public $images = [];
    public $foodtruck;
    public $ft_id;


    public function mount($foodtruck)
    {
        $this->foodtruck = $foodtruck;
        $this->ft_id = $foodtruck->id;
    }

    public function edit()
    {
        $this->validate(
            [
                'images.*' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']
            ]
        );

        foreach ($this->images as $image) {
            $imagename = $image->getClientOriginalName();
            Image::create([
                'ft_id' => $this->ft_id,
                'image_type' => 'menu',
                'path' => $imagename
            ]);
        }

        $dir = public_path('assets/img/foodtrucks/' . $this->ft_id . '/menu');
        if (file_exists($dir))
            file::deleteDirectories($dir);
        else {
            mkdir($dir);
        }

        foreach ($this->images as $image) {
            $imagename = $image->getClientOriginalName();
            $image->storeAs('foodtrucks/' . $this->ft_id . '/menu', $imagename);
        }

        File::deleteDirectory(public_path('assets/img/livewire-tmp'));
        session()->flash('message', "تم إضافة القائمة بنجاح");
        return redirect()->route('user.food_truck.index');
    }
    public function render()
    {
        return view('livewire.user.add-menu-photos');
    }
}
