<?php

class Printer extends \Eloquent {
	protected $table = "Printers";
	protected $guarded = array('_token');

	public static $rules = array(
		'id' => 'required|numeric',
		'name' => 'required|min:5'
	);

	public function manufacturer() {
		return $this->belongsToMany('Manufacturer');
	}

	public function supports_materials() {
		return $this->belongsToMany('Material');
	}
}