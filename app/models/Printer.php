<?php

class Printer extends \Eloquent {
	protected $table = "Printers";

	public function manufacturer() {
		$this->belongsToMany('Manufacturer');
	}

	public function supports_materials() {
		$this->belongsToMany('Material');
	}
}