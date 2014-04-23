<?php

class AuthorizeResponse extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_authorize_responses';




//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

public function address() {
	return $this->belongsTo('Address');
}

public function order() {
	return $this->belongsTo('Order');
}

public function payment() {
	return $this->belongsTo('Payment');
}

public function scheduledPayment() {
	return $this->belongsTo('ScheduledPayment');
}

public function user() {
	return $this->belongsTo('User');
}




//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'authcode'                  => 'required',
		'avs'                       => 'required',
		'amount'                    => 'required',
		'action'                    => 'required',
		'bank_account_suffix'       => 'required',
		'card_name'                 => 'required',
		'card_type'                 => 'required',
		'card_suffix'               => 'required',
		'card_expiry'               => 'required',
		'checkno'                   => 'required',
		'cvv'                       => 'required',
		'decline_type'              => 'required',
		'is_deleted'                => 'required',
		'offenders'                 => 'required',
		'preauth'                   => 'required',
		'raw_response'              => 'required',
		'recurring_result_code'     => 'required',
		'recurring_message_code'    => 'required',
		'recurring_message_text'    => 'required',
		'recurring_subscription_id' => 'required',
		'routing_number'            => 'required',
		'status'                    => 'required',
		'transid'                   => 'required',

		// Foreign Keys
		'address_id'                => 'required',
		'order_id'                  => 'required',
		'payment_id'                => 'required',
		'scheduled_payment_id'      => 'required',
		'user_id'                   => 'required'
	);
}
