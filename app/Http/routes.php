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
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    /*
    * Property stuff
    */
    Route::get('/property', 'PropertyController@index');
    Route::get('/property/edit', 'PropertyController@edit');
    Route::post('/property/edit', 'PropertyController@save');
    /*
    * Amenity stuff
    */
    Route::get('/amenities', 'AmenityController@index');
    Route::get('/amenity/edit/{id}', 'AmenityController@edit');
    Route::post('/amenity/edit/{id}', 'AmenityController@save');
    Route::get('/amenity/delete/{id}', 'AmenityController@delete');
    Route::options('/amenity/edit/{id}', 'AmenityController@gallery');
    /*
    * Location stuff
    */
    Route::get('/locations', 'LocationController@index');
    Route::get('/locations/edit/{id}', 'LocationController@edit');
    Route::post('/locations/edit/{id}', 'LocationController@save');
    Route::get('/locations/delete/{id}', 'LocationController@delete');
    /*
    * Event stuff
    */
    Route::get('/events', 'EventController@index');
    Route::get('/events/edit/{id}', 'EventController@edit');
    Route::post('/events/edit/{id}', 'EventController@save');
    Route::get('/events/delete/{id}', 'EventController@delete');
    /*
    * Image stuff
    */
    Route::get('/images', 'ImageController@index');
    //Route::get('/images/edit/{id}', 'ImageController@edit'); Not sure an image needs to be edited
    Route::put('/images', 'ImageController@save');
    Route::delete('/images', 'ImageController@delete');
    /*
    * Unit stuff
    */
    Route::get('/units', 'UnitController@index');
    Route::get('/units/edit/{id}', 'UnitController@edit');
    Route::post('/units/edit/{id}', 'UnitController@save');
    Route::get('/units/delete/{id}', 'UnitController@delete');
    /*
    * Gallery Routes
    */
    Route::get('/gallery', 'GalleryController@index');
});

Route::get('/', function () {
    return view('welcome');
});
