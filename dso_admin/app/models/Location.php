<?php

class Location extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_locations';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function courses()	{
		return $this->hasMany('Course');
	}

	public function courseInstances() {
		return $this->hasMany('CourseInstance');
	}

	public function courseInstanceDates() {
		return $this->hasMany('CourseInstanceDate');
	}

	public function programInstance()	{
		return $this->hasMany('ProgramInstance');
	}

	public function rooms()	{
		return $this->hasMany('Rooms');
	}

	public function uberProgram()	{
		return $this->hasMany('uberProgram');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'is_active'   => 'required',
		'is_deleted'  => 'required',
		'online'      => 'required',
		'title'       => 'required',
		'title_short' => 'required'
	);
}
