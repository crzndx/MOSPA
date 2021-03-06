<?php

class Price extends \Eloquent {
	protected $table = "prices";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'currency' => 'required|min:1',
		'price' => 'required|numeric'
	);

	public function material() {
		return $this->belongsToMany('Material')->withPivot('material_price');
	}

	public function model() {
		return $this->belongsToMany('ThreeDimModel')->withPivot('price_three_dim_model');
	}
}