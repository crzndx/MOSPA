<?php

class ThreeDimModelsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /threedimmodels
	 *
	 * @return Response
	 */
	public function index()
	{
		$allThreeDimModels = ThreeDimModel::all();

		//$priceOfModel = ThreeDimModel::find(1)->price;

		$priceOfModels = array();
		foreach($allThreeDimModels as $threedimmodel) {
			array_push($priceOfModels, $threedimmodel->price);
		}

		return View::make('pages.ThreeDimModels.index', [
			'threeDimModels' => $allThreeDimModels
		])->with('priceOfModels', $priceOfModels);
	}

	/**
	 * Display a JSON listing of the resource.
	 * GET /threeDimModels/json
	 *
	 * @return Response
	 */
	public function json()
	{
		return Response::json(ThreeDimModel::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /threedimmodels/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /threedimmodels
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /threedimmodels/{id}
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
	 * GET /threedimmodels/{id}/edit
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
	 * PUT /threedimmodels/{id}
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
	 * DELETE /threedimmodels/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}