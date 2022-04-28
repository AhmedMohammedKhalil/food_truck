<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTruck extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'phone',
        'license_no',
        'facebook',
        'status',
        'worktime',
        'user_id'
    ];



    public function rates()
    {
        return $this->belongsToMany(User::class, 'rates','ft_id')
        ->withPivot('rate')
        ->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows','ft_id')
        ->withPivot('readable')
        ->withTimestamps();
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    public function images()
    {
        return $this->hasMany(Image::class,'ft_id');
    }

    public function location()
    {
        return $this->hasOne(TruckLocation::class, 'ft_id');
    }

    public function scopeLogo() {
        return $this->images()->where('image_type','logo')->first();
    }

    public function scopeMenu()
    {
        return $this->images()->where('image_type', 'menu')->get();
    }
}
