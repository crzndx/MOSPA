<?php

class Material extends \Eloquent {
	protected $table = "materials";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:3',
        'densityInGramsPerCm' => 'required|numeric|min:0',
        'pricePerKg' => 'required|numeric|min:0'
	);

	public function printers() {
		return $this->belongsToMany('Printer')->withPivot('material_printer');
	}

	public function prices() {
		return $this->belongsToMany('Price')->withPivot('material_price');
	}

	public function threeDimModel() {
		return $this->belongsToMany('ThreeDimModel')->withPivot('material_three_dim_model');
	}
}