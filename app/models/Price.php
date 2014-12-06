<?php

class Price extends \Eloquent {
	protected $table = "Prices";

	public function material() {
		$this->belongsToMany('Material');
	}

	public function model() {
		$this->belongsToMany('ThreeDimModel');
	}
}