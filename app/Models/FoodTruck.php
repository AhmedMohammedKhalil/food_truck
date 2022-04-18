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



    public function rate()
    {
        return $this->belongsToMany(Rate::class, 'rates','ft_id')
        ->withTimestamps();
    }

    public function follow()
    {
        return $this->belongsToMany(Follow::class, 'follows','ft_id')
        ->withTimestamps();
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
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
