<?php

class Payment extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_payments';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function authorizeResponse()	{
		return $this->hasOne('AuthorizeResponse');
	}

	public function address()	{
		return $this->belongsTo('Address');
	}

	public function order()	{
		return $this->belongsTo('Order');
	}

	// Doesn't matter. order_item_id are all blank
	public function orderItem()	{
		return $this->belongsTo('OrderItem');
	}

	// Doesn't matter. scheduled_payment_id are all blank
	public function scheduledPayment() {
		return $this->belongsTo('scheduledPayment');
	}

	public function user() {
		return $this->belongsTo('User');
	}






//===========================================================================//
//																	VALIDATIONS															 //
//===========================================================================//

	public static $rules = array(
		'action'                    => 'required',
		'amount'                    => 'required',
		'authcode'                  => 'required',
		'avs'                       => 'required',
		'bank_account_suffix'       => 'required',
		'card_expiry'               => 'required',
		'card_name'                 => 'required',
		'card_type'                 => 'required',
		'card_suffix'               => 'required',
		'checkno'                   => 'required',
		'cvv'                       => 'required',
		'decline_type'              => 'required',
		'is_deleted'                => 'required',
		'notes'                     => 'required',
		'offenders'                 => 'required',
		'payment_type'              => 'required',
		'payment_date'              => 'required',
		'preauth'                   => 'required',
		'raw_response'              => 'required',
		'recurring_result_code'     => 'required',
		'recurring_message_code'    => 'required',
		'recurring_message_text'    => 'required',
		'recurring_subscription_id' => 'required',
		'routing_number'            => 'required',
		'status'                    => 'required',
		'transid'                   => 'required',

		// Foregin Keys
		'address_id'                => 'required',
		'order_id'                  => 'required',
		'order_item_id'             => 'required',
		'scheduled_payment_id'      => 'required',
		'user_id'                   => 'required'
	);
}
