<?php

class DashboardsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboards
	 *
	 * @return Response
	 */
	public function index()
	{

		$sum_printers = Printer::all()->count();
		$sum_manufacturers = Manufacturer::all()->count();
		$sum_materials = Material::all()->count();
		$sum_prices = Price::all()->count();
		$sum_threeDimModels = ThreeDimModel::all()->count();

		return View::make('pages.Dashboards.index')
			->with('allPrinters',$sum_printers)
			->with('allManufacturers',$sum_manufacturers)
			->with('allMaterials',$sum_materials)
			->with('allPrices',$sum_prices)
			->with('allThreeDimModels',$sum_threeDimModels);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dashboards/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dashboards
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dashboards/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dashboards/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dashboards/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dashboards/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}