<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function rates()
    {
        return $this->belongsToMany(FoodTruck::class, 'rates','user_id','ft_id')
        ->withPivot('rate')
        ->withTimestamps();
    }

    public function following()
    {
        return $this->belongsToMany(FoodTruck::class, 'follows','user_id','ft_id')
            ->withPivot('readable')
            ->withTimestamps();
    }

    public function food_truck()
    {
        return $this->hasOne(FoodTruck::class);
    }
}
