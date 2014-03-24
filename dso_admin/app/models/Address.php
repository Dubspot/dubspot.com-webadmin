<?php

class Address extends Eloquent {

	protected $guarded = array();






//===========================================================================//
//																RELATIONSHIPS														 	 //
//===========================================================================//

	public function authorizeResponses()	{
		return $this->hasMany('AuthorizeResponse');
	}

	public function payment()	{
		return $this->hasMany('Payment');
	}

	public function orders()	{
		return $this->hasMany('Order', 'billing_address_id'); // <<<<<<<<<<<<<<<< To Do - theres also a shipping address
	}

	public function orderItems() {
		return $this->hasManyThrough('OrderItem', 'Order', 'billing_address_id');
	}

	public function scheduledPayment() {
		return $this->hasMany('ScheduledPayment');
	}

	public function user() {
		return $this->belongsTo('User'); // <<<<<<<<<<<<<<<< To Do - Should return an object, not an array.
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'address1'     => 'required',
		'address2'     => 'required',
		'address_type' => 'required',
		'city'         => 'required',
		'country'      => 'required',
		'email'        => 'required',
		'lastname'     => 'required',
		'mobile_phone' => 'required',
		'phone'        => 'required',
		'postcode'     => 'required',
		'province'     => 'required',
		'firstname'    => 'required',

		// Foreign Keys
		'user_id'      => 'required'
	);
}
