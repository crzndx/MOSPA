<?php

class Material extends \Eloquent {
	protected $table = "Materials";

	public function supported_by_printers() {
		$this->belongsToMany('Printer');
	}

	public function cost_prices() {
		$this->belongsToMany('Price');
	}

	public function uses_model() {
		$this->belongsToMany('ThreeDimModel');
	}
}