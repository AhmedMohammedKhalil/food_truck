<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/truck_details', 'HomeController@showtruckDetails')->name('truck.details');
Route::middleware(['guest:admin','guest:user'])->group(function(){
    Route::get('/admin/login', 'AdminController@showLogin')->name('admin.login');
    Route::get('/user/login', 'UserController@showLogin')->name('user.login');
    Route::get('/user/register', 'UserController@showRegister')->name('user.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::prefix('/regions')->name('regions.')->group(function () {
        Route::get('/', 'RegionController@index')->name('index');
        Route::get('/create', 'RegionController@create')->name('create');
        Route::get('/edit', 'RegionController@edit')->name('edit');
        Route::get('/delete', 'RegionController@destroy')->name('destroy');
    });

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', 'AdminController@showUsers')->name('index');
        Route::get('/show', 'AdminController@getUser')->name('show');
    });

    Route::prefix('/foodtrucks')->name('foodtrucks.')->group(function () {
        Route::get('/', 'FoodTruckController@allFoodTrucks')->name('all');
        Route::get('/show', 'FoodTruckController@showFoodTruck')->name('show');
        Route::get('/accept', 'FoodTruckController@acceptFoodTruck')->name('accept');
        Route::get('/reject', 'FoodTruckController@rejectFoodTruck')->name('reject');
    });




});
Route::middleware(['auth:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/settings', 'UserController@settings')->name('settings');
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/followers','FollowController@followers')->name('followers');
    Route::get('/followers/show','FollowController@show')->name('followers.show');

    Route::get('/followings','FollowController@followings')->name('followings');


    Route::prefix('/food_truck')->name('food_truck.')->group(function() {
        Route::get('/', 'FoodTruckController@index')->name('index');
        Route::get('/create', 'FoodTruckController@create')->name('create');
        Route::get('/edit', 'FoodTruckController@edit')->name('edit');
        Route::get('/menu/create', 'FoodTruckController@menuCreate')->name('menu.create');
        Route::get('/menu/edit', 'FoodTruckController@menuEdit')->name('menu.edit');
        Route::get('/location/create', 'TruckLocationController@create')->name('location.create');
        Route::get('/location/edit', 'TruckLocationController@edit')->name('location.edit');
    });
});

