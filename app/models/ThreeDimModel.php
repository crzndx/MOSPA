<?php

class ThreeDimModel extends \Eloquent {
	protected $fillable = [
		'name',
		'printerId',
		'x',
		'y',
		'z',
		'volume',
		'weight'
	];
}