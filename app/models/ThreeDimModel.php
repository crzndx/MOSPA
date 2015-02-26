<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "ThreeDimModels";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5',
		'volume' => 'required|numeric',
		'weight' => 'required|numeric',
        'infill' => 'required|integer|between:0,100',
        'data' => 'required'
	);

	public function material() {
		return $this->belongsToMany('Material')->withPivot('Material_Three_Dim_Model');
	}

	public function price() {
		return $this->belongsToMany('Price')->withPivot('Price_Three_Dim_Model');
	}
}