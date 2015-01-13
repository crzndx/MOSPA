<?php

class ThreeDimModel extends \Eloquent {
	protected $table = "ThreeDimModels";

	public function material() {
		return $this->belongsToMany('Material');
	}

	public function price() {
		return $this->belongsToMany('Price');
	}
}