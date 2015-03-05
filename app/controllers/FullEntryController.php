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
        $allFullEntries = DB::table('material_three_dim_model')
            ->join('materials', 'material_three_dim_model.material_id', '=','materials.id')
            ->join('threedimmodels','material_three_dim_model.three_dim_model_id','=','threedimmodels.id')
            ->join('price_three_dim_model','material_three_dim_model.three_dim_model_id','=','price_three_dim_model.three_dim_model_id')
            ->join('prices','price_three_dim_model.price_id','=','prices.id')
            ->select(
                // Pivot
                'material_three_dim_model.material_id',
                'material_three_dim_model.three_dim_model_id',
                // Price
                'price_three_dim_model.price_id',
                'prices.price',
                'prices.currency',
                // Material
                'materials.name',
                'materials.densityInGramsPerCm',
                'materials.pricePerKg',
                // 3D Model
                //'threedimmodels.name',
                'threedimmodels.volume',
                'threedimmodels.weight',
                'threedimmodels.infill',
                'threedimmodels.data')
            ->get();

        //cast stdClass into array for output
        $array = (array) $allFullEntries;   // passing to blade
        $js_data = $array; // passing to JS

        return View::make('pages.FullEntry.index', [
            'fullEntries' => $array,
            'js_data' => $js_data
        ]);
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
        // handle file input separately! multipart-form problem otherwise
        $file = Input::file('data');
        // get rest of form input
        $input = Input::all();

        $validation = Validator::make($input, array(
            'nameManufacturer' => 'required|min:5',
            'url' => 'required|min:5',
            'nameMaterial' => 'required|min:3',
            'densityInGramsPerCm' => 'required|numeric',
            'pricePerKg' => 'required|numeric',
            'namePrinter' => 'required|min:5',
            'nameModel' => 'required|min:5',
            'data' => 'required',
            'infill' => 'required|integer|between:0,100',
             //'price' => 'required|numeric',
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
            $material->pricePerKg = Input::get('pricePerKg');
            $material->save();

            $printer = new Printer();
            $printer->name  = Input::get('namePrinter');
            $printer->save();

            $threeDimModel = new ThreeDimModel();
            $threeDimModel->name  = Input::get('nameModel');
            //$threeDimModel->volume  = Input::get('volume');
            //$threeDimModel->weight  = Input::get('weight');
            $threeDimModel->data  = Input::get('data');

                // handle file input separately
                $inputFileName = $file->getClientOriginalName(); // version for debugging
                // $inputFileName = md5($file->getClientOriginalName().time()).".stl";  // near collission free version
                // save .stl file in public folder to access via path later
                $file->move(__DIR__.'/../../public/uploads/',$inputFileName);
                //$input['data'] = $inputFileName;
                $threeDimModel->data = $inputFileName;


                // extract volume automatically via .STL-file
                $output = shell_exec("node ./app/stlextractor.js ".$inputFileName);
                $threeDimModel->volume = $output;
                $volume = $threeDimModel->volume;

                // get percentual infill of a 3d body
                $threeDimModel->infill = Input::get('infill');
                $infill = $threeDimModel->infill;

                // calculate weight in g (density in g/cm3 * volume of the 3d model * (1+infill/100) percentual factor)
                $threeDimModel->weight = (1+($infill / 100)) * $volume * $density;

            $threeDimModel->save();

            $price = new Price();
                // Price = Weight (in g) * (Materialprice (in kg))/1000
                $price->price = $threeDimModel->weight * ($material->pricePerKg/1000);
            $price->currency  = Input::get('currency');
            $price->save();

            // Fill relationship tables
                $printer->manufacturer()->attach($manufacturer->id);
                $printer->supports_materials()->attach($material->id);
                $threeDimModel->material()->attach($material->id);
                $threeDimModel->price()->attach($price->id);

            //$material->name = $this->someExtraWork();

            // Show the price
            return View::make('pages.FullEntry.show', [
                'price' => $price->price,
                'currency' => $price->currency,
                'nameManufacturer' => $manufacturer->name,
                'url' => $manufacturer->url,
                'nameMaterial' => $material->name,
                'densityInGramsPerCm' => $material->densityInGramsPerCm,
                'pricePerKg' => $material->pricePerKg,
                'filename' => $threeDimModel->data,
                'volume' => $threeDimModel->volume,
                'infill' => $threeDimModel->infill,
                'weight' => $threeDimModel->weight
            ]);

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

        return View::make('pages.FullEntry.index', [
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


    public function someExtraWork($method) {
        return $method;
    }

}