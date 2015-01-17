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

/* Simple pages */
Route::get('dashboard', 'DashboardsController@index');
Route::get('dashboards', 'DashboardsController@index');
Route::get('/', 'DashboardsController@index');

/* joined pages */
Route::get('manufacturers/joined','ManufacturersController@joined');


/* JSON responses for models*/
Route::get('printers/json','PrintersController@json');
Route::get('materials/json','MaterialsController@json');
Route::get('prices/json','PricesController@json');
Route::get('manufacturers/json','ManufacturersController@json');
Route::get('threeDimModels/json','ThreeDimModelsController@json');

/* Basic CRUD routes */
Route::resource('printers', 'PrintersController');
Route::resource('materials', 'MaterialsController');
Route::resource('prices', 'PricesController');
Route::resource('manufacturers', 'ManufacturersController');
Route::resource('threeDimModels', 'ThreeDimModelsController');


Route::get('/test', function() {
	return View::make('test');
});


/*
Route::get('/test', function() {
	$ret = Manufacturer::find(1)->printers;
	return Response::json($ret);
	//return Printer::all()->count();
});
*/



