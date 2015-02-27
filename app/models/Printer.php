<?php

class Printer extends \Eloquent {
	protected $table = "printers";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5'
	);

	public function manufacturer() {
		return $this->belongsToMany('Manufacturer')->withPivot('manufacturer_printer');
	}

	public function supports_materials() {
		return $this->belongsToMany('Material')->withPivot('material_printer');
	}
}