<?php

class PricesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /prices
	 *
	 * @return Response
	 */
	public function index()
	{
		$allPrices = Price::all();

		return View::make('pages.Prices.index', [
			'prices' => $allPrices
		]);
	}

	/**
	 * Display a JSON listing of the resource.
	 * GET /prices/json
	 *
	 * @return Response
	 */
	public function json()
	{
		//return "prices json";
		return Response::json(Price::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prices/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.Prices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prices
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Price::$rules);

		if ($validation->passes()) {
			Price::create($input);
			Session::flash('message', 'Created new pricepoint successfully');
			return Redirect::route('prices.index');
		}

		return Redirect::route('prices.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Could not complete due to validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /prices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$price = Price::find($id);

		return View::make('pages.Prices.detail', [
			'price' => $price
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /prices/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$price = Price::find($id);

		return View::make('pages.Prices.edit', [
			'price' => $price
		]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /prices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Price::$rules);

		if ($validation->passes()) {

			$price = Price::find($id);
			$price->currency = Input::get('currency');
			$price->price = Input::get('price');
			$price->save();

			Session::flash('message', 'Updated pricepoint successfully');
			return Redirect::route('prices.index');
		} else {
			Session::flash('message', 'Could not update pricepoint');
			return Redirect::to('prices/'.$id.'/edit')->withErrors($validation);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /prices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$price = Price::find($id);

		if($price != null) {
			$price->delete();
			Session::flash('message', 'Deleted successfully');
		} else {
			Session::flash('message', 'Could not find entry. Deletion aborted.');
		}
		return Redirect::route('prices.index');
	}

}