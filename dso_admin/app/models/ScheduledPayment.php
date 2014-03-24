<?php

class ScheduledPayment extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_scheduled_payments';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	// Doesn't matter. address_ids are all blank
	public function address()	{
		return $this->belongsTo('Address');
	}

	public function authorizeResponse()	{
		return $this->hasOne('AuthorizeResponse');
	}

	public function order()	{
		return $this->belongsTo('Order');
	}

	public function orderItem()	{
		return $this->belongsTo('OrderItem');
	}

	public function payment()	{
		return $this->hasOne('Payment');
	}

	public function transactions() {
		return $this->hasMany('Transaction');
	}

	public function user()	{
		return $this->belongsTo('User');
	}





//===========================================================================//
//																	VALIDATIONS															 //
//===========================================================================//

	public static $rules = array(
		'amount'                    => 'required',
		'avs'                       => 'required',
		'bank_account_suffix'       => 'required',
		'card_name'                 => 'required',
		'card_type'                 => 'required',
		'card_suffix'               => 'required',
		'card_expiry'               => 'required',
		'decline_type'              => 'required',
		'is_deleted'                => 'required',
		'payment_type'              => 'required',
		'payment_date'              => 'required',
		'recurring_message_code'    => 'required',
		'recurring_message_text'    => 'required',
		'recurring_result_code'     => 'required',
		'recurring_subscription_id' => 'required',
		'routing_number'            => 'required',
		'status'                    => 'required',

		// Foreign Keys
		'address_id'                => 'required',
		'order_id'                  => 'required',
		'order_item_id'             => 'required',
		'user_id'                   => 'required'
	);
}


