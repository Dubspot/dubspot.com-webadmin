<?php

class ProgramInstance extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_program_instances';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function courseInstances() {
		return $this->belongsToMany('CourseInstance', 'ecommerce_course_instances_to_program_instances');
	}

	public function location() {
		return $this->belongsTo('Location');
	}

	public function program() {
		return $this->belongsTo('Program');
	}

	public function users()	{
		return $this->belongsToMany('User', 'ecommerce_users_to_program_instances');
	}


//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'class_type'             => 'required',
		'closeout_days_override' => 'required',
		'date_closeout_override' => 'required',
		'date_description'       => 'required',
		'description'            => 'required',
		'duration_override'      => 'required',
		'identifier'             => 'required',
		'is_active'              => 'required',
		'is_deleted'             => 'required',
		'is_full'                => 'required',
		'orbund_programmeCode'   => 'required',
		'title'                  => 'required',
		'status'                 => 'required',

		// Foreign Keys
		'location_id'            => 'required',
		'program_id'             => 'required'
	);
}
