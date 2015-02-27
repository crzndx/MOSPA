<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "threedimmodels";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5',
		'weight' => 'required|numeric',
        'infill' => 'required|integer|between:0,100',
        'data' => 'required'
	);

	public function material() {
		return $this->belongsToMany('Material')->withPivot('material_three_dim_model');
	}

	public function price() {
		return $this->belongsToMany('Price')->withPivot('price_three_dim_model');
	}
}