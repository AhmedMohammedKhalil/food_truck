<?php

namespace App\Providers;

use App\Models\FoodTruck;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('admins/*',function($views) {
            $count = FoodTruck::where('status','0')->get()->count();
            $views->with('foodTruck_count',$count);
        });
    }
}
