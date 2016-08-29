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
    Route::get('/amenity', 'AmenityController@index');
    Route::get('/amenity/edit/{id}', 'AmenityController@edit');
    Route::post('/amenity/edit/{id}', 'AmenityController@save');
    Route::get('/amenity/delete/{id}', 'AmenityController@delete');
    Route::get('/amenity/add', 'AmenityController@add');
    Route::post('/amenity/add', 'AmenityController@save');

    /*
    * Location stuff
    */
    Route::get('/location', 'LocationController@index');
    Route::get('/location/edit/{id}', 'LocationController@edit');
    Route::post('/location/edit/{id}', 'LocationController@save');
    Route::get('/location/delete/{id}', 'LocationController@delete');
    Route::get('/location/add', 'LocationController@add');
    Route::post('/location/add', 'LocationController@save');
    /*
    * Event stuff
    */
    Route::get('/event', 'EventController@index');
    Route::get('/event/edit/{id}', 'EventController@edit');
    Route::post('/event/edit/{id}', 'EventController@save');
    Route::get('/event/delete/{id}', 'EventController@delete');
    Route::get('/event/add', 'EventController@add');
    Route::post('/event/add', 'EventController@save');
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
    Route::get('/unit', 'UnitController@index');
    Route::get('/unit/edit/{id}', 'UnitController@edit');
    Route::post('/unit/edit/{id}', 'UnitController@save');
    Route::get('/unit/delete/{id}', 'UnitController@delete');
    Route::get('/unit/import', 'UnitController@import');
    Route::post('/unit/import', 'UnitController@import');
    /*
    * Floorplan stuff
    */
    Route::get('/floorplan', 'FloorplanController@index');
    Route::get('/floorplan/edit/{id}', 'FloorplanController@edit');
    Route::post('/floorplan/edit/{id}', 'FloorplanController@save');
    Route::get('/floorplan/delete/{id}', 'FloorplanController@delete');
    Route::get('/floorplan/import', 'FloorplanController@import');
    Route::post('/floorplan/import', 'FloorplanController@import');
    /*
    * Gallery Routes
    */
    Route::get('/gallery', 'GalleryController@index');
});

Route::get('/', function () {
    return view('welcome');
});
