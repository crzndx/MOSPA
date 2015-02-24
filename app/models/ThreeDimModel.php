<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "ThreeDimModels";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5',
		'volume' => 'required|numeric',
		'weight' => 'required|numeric',
        'data' => 'required'
	);

	public function material() {
		return $this->belongsToMany('Material');
	}

	public function price() {
		return $this->belongsToMany('Price');
	}
}