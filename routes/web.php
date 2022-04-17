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
//Route::get('/food_trucks', 'HomeController@food_trucks')->name('food_trucks');
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
});
Route::middleware(['auth:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/settings', 'UserController@settings')->name('settings');
    Route::get('/logout', 'UserController@logout')->name('logout');

    Route::prefix('/food_truck')->name('food_truck.')->group(function() {
        Route::get('/index', 'FoodTruckController@index')->name('index');
        Route::get('/create', 'FoodTruckController@create')->name('create');
        Route::get('/edit', 'FoodTruckController@edit')->name('edit');
    });
});

