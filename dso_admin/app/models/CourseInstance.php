<?php

class CourseInstance extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_course_instances';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function course() {
		return $this->belongsTo('Course');
	}

	public function location() {
		return $this->belongsTo('Location');
	}

	public function orderItems()	{
		return $this->hasMany('OrderItem', 'instance_id');
	}

	public function programInstances() {
		return $this->belongsToMany('ProgramInstance', 'ecommerce_course_instances_to_program_instances');
	}

	public function room() {
		return $this->belongsTo('Room');
	}

	public function users()	{
		return $this->belongsToMany('User', 'ecommerce_users_to_course_instances');
	}


//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'category'               => 'required',
		'class_type'             => 'required',
		'closeout_days_override' => 'required',
		'course_end'             => 'required',
		'course_start'           => 'required',
		'date_closeout_override' => 'required',
		'date_description'       => 'required',
		'description'            => 'required',
		'duration_override'      => 'required',
		'identifier'             => 'required',
		'instructor_id'          => 'required',
		'is_active'              => 'required',
		'is_deleted'             => 'required',
		'is_full'                => 'required',
		'orbund_class_name'      => 'required',
		'seats_min'              => 'required',
		'seats_max'              => 'required',
		'status'                 => 'required',
		'title'                  => 'required',

		// Foreign Keys
		'course_id'              => 'required',
		'location_id'            => 'required',
		'room_id'                => 'required'
	);
}
