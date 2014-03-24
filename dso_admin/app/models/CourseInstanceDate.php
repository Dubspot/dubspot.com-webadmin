<?php

class CourseInstanceDate extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_course_instance_dates';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function courseInstance() {
		return $this->belongsTo('CourseInstance');
	}

	public function location() {
		return $this->belongsTo('Location');
	}

	public function room() {
		return $this->belongsTo('Room');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'course_date_start'  => 'required',
		'course_date_end'    => 'required',
		'instructor_id'      => 'required',
		'is_deleted'         => 'required',

		// Foreign Keys
		'course_instance_id' => 'required',
		'location_id'        => 'required',
		'room_id'            => 'required'
	);
}
