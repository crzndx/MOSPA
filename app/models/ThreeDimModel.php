<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "ThreeDimModels";

	public function made_of_material() {
		$this->belongsToMany('Material');
	}

	public function costs() {
		$this->belongsToMany('Price');
	}
}