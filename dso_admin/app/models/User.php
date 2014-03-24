<?php

class User extends Eloquent {

	public $timestamps = false;
	protected $guarded = array();






//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function address() {
		return $this->hasOne('Address');
	}

	public function authorizeResponse()	{
		return $this->hasMany('AuthorizeResponse');
	}

	public function basketItems()	{
		return $this->hasMany('BasketItem');
	}

	public function courseInstances()	{
		return $this->belongsToMany('CourseInstance', 'ecommerce_users_to_course_instances');
	}

	// Doesn't matter. Invoice table is blank.
	public function invoices() {
		return $this->hasMany('Invoice');
	}

	public function orders() {
		return $this->hasMany('Order');
	}

	public function orderItems() {
		return $this->hasMany('OrderItem');
	}

	public function payment() {
		return $this->hasMany('Payment');
	}

	public function programInstances()	{
		return $this->belongsToMany('ProgramInstance', 'ecommerce_users_to_program_instances');
	}

	public function promotionsIssued() {
		return $this->hasMany('PromotionIssued');
	}

	public function scheduledPayment() {
		return $this->hasMany('ScheduledPayment');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'activation_hash'        => 'required',
		'activation_attempts'    => 'required',
		'activated'              => 'required',
		'biography'              => 'required',
		'birthday'               => 'required',
		'birthday_display_style' => 'required',
		'contact_email'          => 'required',
		'created'                => 'required',
		'email'                  => 'required',
		'facebook_session_key'   => 'required',
		'facebook_user_id'       => 'required',
		'firstname'              => 'required',
		'found_how'              => 'required',
		'influences'             => 'required',
		'interests'              => 'required',
		'is_deleted'             => 'required',
		'last_updated'           => 'required',
		'lastname'               => 'required',
		'location'               => 'required',
		'moodle_user_id'         => 'required',
		'password_hash'          => 'required',
		'orbund_id'              => 'required',
		'origin_country'         => 'required',
		'profile_image_id'       => 'required',
		'reset_hash'             => 'required',
		'role'                   => 'required',
		'send_updates'           => 'required',
		'stage_name'             => 'required',
		'suspended'              => 'required',
		'username'               => 'required',

		// Foreign Keys
		'address_id'             => 'required',
		'wp_user_id'             => 'required' // <<<<<<<<<<<<<<<< To Do - define relationship test
	);
}
