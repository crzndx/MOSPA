<?php

class Manufacturer extends \Eloquent {
	protected $table = "Manufacturers";

	public function printers() {
		return $this->belongsToMany('Printer');
	}
}