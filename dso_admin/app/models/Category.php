<?php

class Category extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_categories';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function programs() {
		return $this->belongsToMany('Program', 'ecommerce_programs_to_categories');
	}

	public function courses() {
		return $this->belongsToMany('Course', 'ecommerce_courses_to_categories');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'description' => 'required',
		'is_active'   => 'required',
		'is_deleted'  => 'required',
		'title'       => 'required',
		'wp_post_id'  => 'required'
	);
}
