<?php

class Room extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_rooms';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function location(){
		return $this->belongsTo('Location');
	}

	public function courseInstances() {
		return $this->hasMany('CourseInstance');
	}

	public function courseInstanceDates() {
		return $this->hasMany('CourseInstanceDate');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'is_active'   => 'required',
		'is_deleted'  => 'required',
		'seats_max'   => 'required',
		'title'       => 'required',

		// Foregin Keys
		'location_id' => 'required'
	);
}
