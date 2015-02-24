<?php

class Price extends \Eloquent {
	protected $table = "Prices";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'currency' => 'required|min:1',
		'price' => 'required|numeric'
	);

	public function material() {
		return $this->belongsToMany('Material');
	}

	public function model() {
		return $this->belongsToMany('ThreeDimModel');
	}
}