<?php

class Price extends \Eloquent {
	protected $table = "Prices";

	public function material() {
		return $this->belongsToMany('Material');
	}

	public function model() {
		return $this->belongsToMany('ThreeDimModel');
	}
}