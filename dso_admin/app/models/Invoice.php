<?php

class Invoice extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_invoices';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function basketItems() {
		return $this->hasMany('BasketItem');
	}

	public function user() {
		return $this->belongsTo('User');
	}



//===========================================================================//
//																VALDIATIONS																 //
//===========================================================================//

	public static $rules = array(
		'comments'            => 'required',
		'demo'                => 'required',
		'discounted'          => 'required',
		'discount_amount'     => 'required',
		'first_name'          => 'required',
		'is_deleted'          => 'required',
		'i_tax_total'         => 'required',
		'last_name'           => 'required',
		'manually_created'    => 'required',
		'order_total'         => 'required',
		's_tax_total'         => 'required',
		'status'              => 'required',
		'tax_total'           => 'required',

		// Foreign Keys
		'alternate_order_id'  => 'required',
		'billing_address_id'  => 'required',
		'shipping_address_id' => 'required',
		'user_id'             => 'required'
	);
}
