<?php

class Manufacturer extends \Eloquent {
	protected $table = "Manufacturers";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5',
		'url' => 'required|min:5'
	);

	public function printers() {
		return $this->belongsToMany('Printer');
	}
}