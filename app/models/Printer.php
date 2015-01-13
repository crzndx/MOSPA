<?php

class Printer extends \Eloquent {
	protected $table = "Printers";

	public function manufacturer() {
		return $this->belongsToMany('Manufacturer');
	}

	public function supports_materials() {
		return $this->belongsToMany('Material');
	}
}