<?php

class MaterialsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /materials
	 *
	 * @return Response
	 */
	public function index()
	{
		$allMaterials= Material::all();

		return View::make('pages.Materials.index', [
			'materials' => $allMaterials
		]);
	}

	/**
	 * Display a JSON listing of the resource.
	 * GET /materials/json
	 *
	 * @return Response
	 */
	public function json()
	{
		return Response::json(Material::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /materials/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.Materials.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /materials
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Material::$rules);

		if ($validation->passes()) {
			Material::create($input);
			Session::flash('message', 'Created new material successfully');
			return Redirect::route('materials.index');
		}

		return Redirect::route('materials.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Could not complete due to validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /materials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$material = Material::find($id);

		return View::make('pages.Materials.detail', [
			'material' => $material
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /materials/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$material = Material::find($id);

		return View::make('pages.Materials.edit', [
			'material' => $material
		]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /materials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Material::$rules);

		if ($validation->passes()) {

			$material = Material::find($id);
			$material->name = Input::get('name');
            $material->densityInGramsPerCm = Input::get('densityInGramsPerCm');
            $material->pricePerKg = Input::get('pricePerKg');
			$material->save();

			Session::flash('message', 'Updated material successfully');
			return Redirect::route('materials.index');
		} else {
			Session::flash('message', 'Could not update material');
			return Redirect::to('materials/'.$id.'/edit')->withErrors($validation);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /materials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$material = Material::find($id);

		if($material != null) {
			$material->delete();
			Session::flash('message', 'Deleted successfully');
		} else {
			Session::flash('message', 'Could not find entry. Deletion aborted.');
		}
		return Redirect::route('materials.index');
	}

}