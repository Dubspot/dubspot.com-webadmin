<?php

class Order extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_orders';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function authorizeResponses()	{
		return $this->hasMany('AuthorizeResponse');
	}

	public function billingAddress() {
		return $this->belongsTo('Address', 'billing_address_id');
	}

	public function orderItems() {
		return $this->hasMany('OrderItem');
	}

	public function payment()	{
		return $this->hasOne('Payment');
	}

	public function promotionsIssued() {
		return $this->hasMany('PromotionIssued');
	}

	public function scheduledPayment() {
		return $this->hasMany('ScheduledPayment');
	}

	public function shippingAddress()	{
		return $this->belongsTo('Address', 'shipping_address_id');
	}

	public function user() {
		return $this->belongsTo('User');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//
	public static $rules = array(
		'alternate_order_id'  => 'required', // ???? - find out what this is
		'discounted'          => 'required',
		'discount_amount'     => 'required',
		'demo'                => 'required',
		'first_name'          => 'required',
		'i_tax_total'         => 'required',
		'is_deleted'          => 'required',
		'last_name'           => 'required',
		'manually_created'    => 'required',
		'order_total'         => 'required',
		's_tax_total'         => 'required',
		'status'              => 'required',
		'tax_total'           => 'required',
		'comments'            => 'required',

		'user_id'             => 'required', // Done
		'shipping_address_id' => 'required', // <<<<<<<<<<<<<<<< To Do - Define and test this relationship
		'billing_address_id'  => 'required'  // <<<<<<<<<<<<<<<< To Do - Define and test this relationship
	);
}
