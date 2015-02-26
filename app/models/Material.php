<?php

class Material extends \Eloquent {
	protected $table = "Materials";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:3',
        'densityInGramsPerCm' => 'required|numeric'
	);

	public function printers() {
		return $this->belongsToMany('Printer')->withPivot('Material_Printer');
	}

	public function prices() {
		return $this->belongsToMany('Price')->withPivot('Material_Price');
	}

	public function threeDimModel() {
		return $this->belongsToMany('ThreeDimModel','ThreeDimModels','id')->withPivot('Material_Three_Dim_Model');
	}
}