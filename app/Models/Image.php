<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'path',
        'image_type',
        'ft_id'
    ];


    public function food_truck()
    {
        return $this->belongsTo(FoodTruck::class,'ft_id');
    }
}
