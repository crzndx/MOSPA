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
		/*
		$allThreeDimModels = ThreeDimModel::all();

		//$priceOfModel = ThreeDimModel::find(1)->price;

		$priceOfModels = array();
		foreach($allThreeDimModels as $threedimmodel) {
			array_push($priceOfModels, $threedimmodel->price);
		}

		return View::make('pages.ThreeDimModels.index', [
			'threeDimModels' => $allThreeDimModels
		])->with('priceOfModels', $priceOfModels);
		*/
		$allThreeDimModels = ThreeDimModel::all();

		return View::make('pages.ThreeDimModels.index', [
			'threeDimModels' => $allThreeDimModels
		]);
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
		return View::make('pages.ThreeDimModels.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /threedimmodels
	 *
	 * @return Response
	 */
	public function store()
	{
        $file = Input::file('data');
		$input = Input::all();
        $validation = Validator::make($input, ThreeDimModel::$rules);

		if ($validation->passes()) {
            // @ToDo check for correct mimetype validation and max filesize

            // handle file input separately
            $reName = $file->getClientOriginalName(); // version for debugging
            // $reName = md5($file->getClientOriginalName().time()).".stl";  // near collission free version
            // save .stl file in public folder to access via path later
            $file->move(__DIR__.'/../../public/uploads/',$reName);
            $input['data'] = $reName;

            // extract volume automatically via .STL-file
            $output = shell_exec("node ./app/stlextractor.js ".$reName);
            $volume = $output;
            $input['volume'] = $volume;


            // save input data
            ThreeDimModel::create($input);
			Session::flash('success', 'Created new 3D Model successfully');
			return Redirect::route('threeDimModels.index');
		}

		return Redirect::route('threeDimModels.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Could not complete due to validation errors.');
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
		$threeDimModel = ThreeDimModel::find($id);

		return View::make('pages.ThreeDimModels.detail', [
			'threeDimModel' => $threeDimModel
		]);
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
		$threeDimModel = ThreeDimModel::find($id);

		return View::make('pages.ThreeDimModels.edit', [
			'threeDimModel' => $threeDimModel
		]);
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
		$input = Input::all();
		$validation = Validator::make($input, ThreeDimModel::$rules);

		if ($validation->passes()) {

			$threeDimModel = ThreeDimModel::find($id);
			$threeDimModel->name = Input::get('name');
			$threeDimModel->volume = Input::get('volume');
			$threeDimModel->weight = Input::get('weight');
            $threeDimModel->data = Input::get('data');
			$threeDimModel->save();

			Session::flash('message', 'Updated 3D model successfully');
			return Redirect::route('threeDimModels.index');
		} else {
			Session::flash('message', 'Could not update printer');
			return Redirect::to('threeDimModels/'.$id.'/edit')->withErrors($validation);
		}
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
		$threeDimModel = ThreeDimModel::find($id);

		if($threeDimModel != null) {
			$threeDimModel->delete();
			Session::flash('message', 'Deleted successfully');
		} else {
			Session::flash('message', 'Could not find entry. Deletion aborted.');
		}
		return Redirect::route('threeDimModels.index');
	}

}