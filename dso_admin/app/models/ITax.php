<?php

class ITax extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_i_tax';





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'state'      => 'required',
		'rate'       => 'required',
		'multiplier' => 'required'
	);
}
