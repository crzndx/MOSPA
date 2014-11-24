<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::resource('printers', 'PrintersController@index');

Route::resource('dashboard', 'DashboardsController@index');
Route::resource('dashboards', 'DashboardsController@index');

Route::resource('materials', 'MaterialsController@index');

Route::resource('prices', 'PricesController@index');

Route::resource('manufacturers', 'ManufacturersController');

Route::resource('threeDimModels', 'ThreeDimModelsController');

Route::get('/test', function() {
	return View::make('test');
});

Route::resource('/', 'DashboardsController@index');