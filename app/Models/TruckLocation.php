<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckLocation extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'region_id',
        'ft_id',
        'streat',
        'block',
        'house'
    ];


    public function food_truck()
    {
        return $this->belongsTo(FoodTruck::class, 'ft_id');
    }

    public function region() {
        return $this->belongsTo(Region::class, 'region_id');

    }
}
