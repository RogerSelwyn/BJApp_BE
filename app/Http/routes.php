<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('species', 'SpeciesController');
Route::resource('speciestype', 'SpeciesTypeController');
Route::resource('location', 'LocationController');
Route::resource('specieslocation', 'SpeciesLocationController');
Route::resource('speciesphoto', 'SpeciesPhotoController');
Route::resource('postcodesearch', 'PostcodeSearchController');
Route::resource('setting', 'SettingController');
