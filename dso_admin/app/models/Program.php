<?php

class Program extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_programs';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function categories() {
		return $this->belongsToMany('Category', 'ecommerce_programs_to_categories');
	}

	public function courses() {
		return $this->belongsToMany('Course', 'ecommerce_courses_to_programs');
	}

	// Doesn't matter. All location_ids are 0
	public function location() {
		return $this->belongsTo('Location');
	}

	public function programInstance()	{
		return $this->hasMany('ProgramInstance');
	}

	public function uberPrograms() {
		return $this->belongsToMany('UberProgram', 'ecommerce_programs_to_uber_programs');
	}




//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'child_program_ids'        => 'required',
		'description'              => 'required',
		'is_active'                => 'required',
		'is_deleted'               => 'required',
		'orbund_course_group_id'   => 'required',
		'orbund_course_group_name' => 'required',
		'orbund_program_code'      => 'required',
		'show_past_dso'            => 'required',
		'show_past_nyc'            => 'required',
		'status'                   => 'required',
		'title'                    => 'required',
		'title_short'              => 'required',
		'url_program'              => 'required',
		'url_register'             => 'required',

		// Foreign Keys
		'location_id'              => 'required',
		'wp_post_id'               => 'required'
	);
}
