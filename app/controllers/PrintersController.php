<?php

class PrintersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /printers
	 *
	 * @return Response
	 */
	public function index()
	{
		$allPrinters = Printer::all();

		return View::make('pages.Printers.index', [
			'printers' => $allPrinters
		]);
	}

	/**
	 * Display a JSON listing of the resource.
	 * GET /printers/json
	 *
	 * @return Response
	 */
	public function json()
	{
		return Response::json(Printer::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /printers/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.Printers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /printers
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Printer::$rules);

		if ($validation->passes()) {
			Printer::create($input);
			Session::flash('message', 'Created new printer successfully');
			return Redirect::route('printers.index');
		}

		return Redirect::route('printers.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Could not complete due to validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /printers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$printer = Printer::find($id);

		return View::make('pages.Printers.detail', [
			'printer' => $printer
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /printers/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$printer = Printer::find($id);

		return View::make('pages.Printers.edit', [
			'printer' => $printer
		]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /printers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Printer::$rules);

		if ($validation->passes()) {

			$printer = Printer::find($id);
			$printer->name = Input::get('name');
			$printer->save();

			Session::flash('message', 'Updated printer successfully');
			return Redirect::route('printers.index');
		} else {
			Session::flash('message', 'Could not update printer');
			return Redirect::to('printers/'.$id.'/edit')->withErrors($validation);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /printers/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$printer = Printer::find($id);

		if($printer != null) {
			$printer->delete();
			Session::flash('message', 'Deleted successfully');
		} else {
			Session::flash('message', 'Could not find entry. Deletion aborted.');
		}
		return Redirect::route('printers.index');
	}

}