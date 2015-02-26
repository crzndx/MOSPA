<?php

class Printer extends \Eloquent {
	protected $table = "Printers";
	protected $guarded = array('_token','id');

	public static $rules = array(
		'name' => 'required|min:5'
	);

	public function manufacturer() {
		return $this->belongsToMany('Manufacturer')->withPivot('Manufacturer_Printer');
	}

	public function supports_materials() {
		return $this->belongsToMany('Material')->withPivot('Material_Printer');
	}
}