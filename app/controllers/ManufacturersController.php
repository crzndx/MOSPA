<?php

class ManufacturersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /manufacturers
	 *
	 * @return Response
	 */
	public function index()
	{
		$allManufacturers = Manufacturer::all();

		return View::make('pages.Manufacturers.index', [
			'manufacturers' => $allManufacturers
		]);
	}

	/**
	 * Display joined tables
	 * GET /manufacturers/joined
	 *
	 * @return Response
	 */
	public function joined()
	{
		/*$allManufacturers = Manufacturer::all();

		return View::make('pages.Manufacturers.index', [
			'manufacturers' => $allManufacturers
		]);
		*/

		/*
		$allManufacturers = Manufacturer::all();

		$printerOfManufacturer = Printer::find(1);

		$printerOfManufacturer->manufacturer;




		return View::make('pages.Manufacturers.mf', [
			'allManufacturers' => $allManufacturers
		])->with('printerOfManufacturer', $printerOfManufacturer);

		return Response::json($printerOfManufacturer);
		*/
		return Response::json(Manufacturer::all());
	}


	public function sum()
	{
		$allManufacturers = Manufacturer::all();
		return count($allManufacturers);
	}

	/**
	 * Display a JSON listing of the resource.
	 * GET /manufacturers/json
	 *
	 * @return Response
	 */
	public function json()
	{
		return Response::json(Manufacturer::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /manufacturers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.Manufacturers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /manufacturers
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Manufacturer::$rules);

		if ($validation->passes()) {
			Manufacturer::create($input);
			Session::flash('message', 'Created new manufacturer successfully');
			return Redirect::route('manufacturers.index');
		}

		return Redirect::route('manufacturers.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Could not complete due to validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /manufacturers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturer = Manufacturer::find($id);

		return View::make('pages.Manufacturers.detail', [
			'manufacturer' => $manufacturer
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /manufacturers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturer = Manufacturer::find($id);

		return View::make('pages.Manufacturers.edit', [
			'manufacturer' => $manufacturer
		]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /manufacturers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Manufacturer::$rules);

		if ($validation->passes()) {

			$manufacturer = Manufacturer::find($id);
			$manufacturer->name = Input::get('name');
			$manufacturer->url = Input::get('url');
			$manufacturer->save();


			Session::flash('message', 'Updated manufacturer successfully');
			return Redirect::route('manufacturers.index');
		} else {
			Session::flash('message', 'Could not update manufacturer');
			return Redirect::to('manufacturers/'.$id.'/edit')->withErrors($validation);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /manufacturers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$manufacturer = Manufacturer::find($id);

		if($manufacturer != null) {
			$manufacturer->delete();
			Session::flash('message', 'Deleted successfully');
		} else {
			Session::flash('message', 'Could not find entry. Deletion aborted.');
		}
		return Redirect::route('manufacturers.index');
	}



}