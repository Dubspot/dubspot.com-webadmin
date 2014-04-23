<?php

class UberProgram extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_uber_programs';





//===========================================================================//
//																RELATIONSHIPS														 	 //
//===========================================================================//

	public function location()	{
		return $this->belongsTo('Location');
	}

	public function programs() {
		return $this->belongsToMany('Program', 'ecommerce_programs_to_uber_programs');
	}


//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'custom_location'      => 'required',
		'custom_location_link' => 'required',
		'description'          => 'required',
		'is_active'            => 'required',
		'is_deleted'           => 'required',
		'orbund_program_code'  => 'required',
		'status'               => 'required',
		'title'                => 'required',

		// Foreign Keys
		'wp_post_id'           => 'required',
		'location_id'          => 'required'
	);
}
