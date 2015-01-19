<?php

class Material extends \Eloquent {
	protected $table = "Materials";
	protected $guarded = array('_token');

	public static $rules = array(
		'id' => 'required|numeric',
		'name' => 'required|min:3'
	);

	public function printers() {
		return $this->belongsToMany('Printer');
	}

	public function prices() {
		return $this->belongsToMany('Price');
	}

	public function threeDimModel() {
		return $this->belongsToMany('ThreeDimModel','ThreeDimModels','id');
	}
}