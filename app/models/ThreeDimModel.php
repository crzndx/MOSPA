<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "ThreeDimModels";
	protected $guarded = array('_token');

	public static $rules = array(
		'id' => 'required|numeric',
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