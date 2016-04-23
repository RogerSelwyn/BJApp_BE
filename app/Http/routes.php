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
// CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');

//All routes below
Route::get('/', function () {
    return view('welcome');
});

Route::resource('species', 'SpeciesController');
Route::resource('speciestype', 'SpeciesTypeController');
Route::resource('location', 'LocationController');
Route::resource('region', 'RegionController');
Route::resource('specieslocation', 'SpeciesLocationController');
Route::resource('speciesphoto', 'SpeciesPhotoController');
Route::resource('postcodesearch', 'PostcodeSearchController');
Route::resource('setting', 'SettingController');
