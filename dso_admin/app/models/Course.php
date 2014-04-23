<?php

class Course extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_courses';





//===========================================================================//
//																RELATIONSHIPS														   //
//===========================================================================//

	public function location() {
		return $this->belongsTo('Location'); // Not really - every location_id is 0
	}

	public function courseInstances()	{
		return $this->hasMany('CourseInstance');
	}

	public function categories() {
		return $this->belongsToMany('Category', 'ecommerce_courses_to_categories');
	}

	public function programs() {
		return $this->belongsToMany('Program', 'ecommerce_courses_to_programs');
	}


//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'description'          => 'required',
		'instructor_id'        => 'required',
		'is_active'            => 'required',
		'is_deleted'           => 'required',
		'orbund_course_number' => 'required',
		'seats_max'            => 'required',
		'seats_min'            => 'required',
		'status'               => 'required',
		'title'                => 'required',
		'wp_post_id'           => 'required',

		// Foreign Keys
		'location_id'          => 'required'
	);
}
