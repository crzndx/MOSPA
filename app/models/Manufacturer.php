<?php

class Manufacturer extends \Eloquent {
	protected $table = "Manufacturers";

	public function printers() {
		$this->belongsToMany('Printer');
	}
}