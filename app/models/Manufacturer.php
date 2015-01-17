<?php

class Manufacturer extends \Eloquent {
	protected $table = "Manufacturers";
	protected $guarded = array('_token');

	public static $rules = array(
		'id' => 'required|numeric',
		'name' => 'required|min:5',
		'url' => 'required|min:5'
	);

	public function printers() {
		return $this->belongsToMany('Printer');
	}
}