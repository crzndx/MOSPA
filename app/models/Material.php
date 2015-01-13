<?php

class Material extends \Eloquent {
	protected $table = "Materials";

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