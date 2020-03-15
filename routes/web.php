<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Backoffice routes

Route::name('admin.')->prefix('admin')->group(function () {
    //Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //Brands
    Route::get('brands/all', 'BrandsController@index')->name('all-brands'); 
    Route::get('brands/new', 'BrandsController@create')->name('add-car-brand'); 

    //Vehicles
    Route::get('vehicles/all', 'VehicleController@index')->name('all-vehicles'); 
    Route::get('vehicles/new', 'VehicleController@create')->name('add-vehicle'); 
    Route::get('vehicles/view/{id}', 'VehicleController@show')->name('show-vehicle'); 
    
    //Users
    Route::get('users/all', 'UsersController@index')->name('all-users');
    Route::get('users/new', 'UsersController@create')->name('create-users')->middleware('is_admin');
    Route::post('users/store', 'UsersController@store')->name('register-user')->middleware('is_admin');

    Route::get('users/edit/{id}', 'UsersController@edit')->name('edit-user')->middleware('is_admin');
    Route::post('users/update/{id}', 'UsersController@update')->name('update-user')->middleware('is_admin');

    Route::delete('users/delete/{id}', 'UsersController@destroy')->name('delete-user')->middleware('is_admin');
});
