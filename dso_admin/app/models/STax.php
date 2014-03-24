<?php

class STax extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_s_tax';





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'state'      => 'required',
		'rate'       => 'required',
		'multiplier' => 'required'
	);
}
