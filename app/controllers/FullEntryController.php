<?php

class FullEntryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /fullentry
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('pages.FullEntry.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /fullentry/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('pages.FullEntry.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /fullentry
	 *
	 * @return Response
	 */
	public function store()
	{
        $file = Input::file('data');
        $input = Input::all();

        $validation = Validator::make($input, array(
            'nameManufacturer' => 'required|min:5',
            'url' => 'required|min:5',
            'nameMaterial' => 'required|min:3',
            'densityInGramsPerCm' => 'required|numeric',
            'namePrinter' => 'required|min:5',
            'nameModel' => 'required|min:5',
            'data' => 'required',
            'price' => 'required|numeric',
            'currency' => 'required|min:1'
        ));

        if($validation->passes()) {

            $manufacturer = new Manufacturer();
            $manufacturer->name  = Input::get('nameManufacturer');
            $manufacturer->url = Input::get('url');
            $manufacturer->save();

            $material = new Material();
            $material->name  = Input::get('nameMaterial');
            $material->densityInGramsPerCm = Input::get('densityInGramsPerCm');
                $density = $material->densityInGramsPerCm;
            $material->save();

            $printer = new Printer();
            $printer->name  = Input::get('namePrinter');
            $printer->save();

            $threeDimModel = new ThreeDimModel();
            $threeDimModel->name  = Input::get('nameModel');
            //$threeDimModel->volume  = Input::get('volume');
            $threeDimModel->data  = Input::get('data');

                // handle file input separately
                $reName = $file->getClientOriginalName(); // version for debugging
                // $reName = md5($file->getClientOriginalName().time()).".stl";  // near collission free version
                // save .stl file in public folder to access via path later
                $file->move(__DIR__.'/../../public/uploads/',$reName);
                //$input['data'] = $reName;
                 $threeDimModel->data = $reName;


                // extract volume automatically via .STL-file
                $output = shell_exec("node ./app/stlextractor.js ".$reName);
                $threeDimModel->volume = $output;
                $volume = $threeDimModel->volume;

                // calculate weight in kg (density in g/cm3 divided by volume in cm3)/1000
                $threeDimModel->weight = ($density * $volume) / 1000;

            $threeDimModel->save();

            $price = new Price();
            $price->price= Input::get('price');
            $price->currency  = Input::get('currency');
            $price->save();

            //$new_recipe->creator_id = Auth::user()->id;

            //@TODO hier Relationships noch eintragen!!!
            return View::make('pages.FullEntry.index');
        }

        return Redirect::route('fullEntry.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Could not complete due to validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /fullentry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

        return View::make('pages.FullEntry.show', [
            'fullEntry' => $id
        ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /fullentry/{id}/edit
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
	 * PUT /fullentry/{id}
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
	 * DELETE /fullentry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//TODO later
	}

}