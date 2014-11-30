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
		//
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
		return View::make('pages.Printers.show');
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
		return View::make('pages.Printers.edit');
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
		//
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
		//
	}

}