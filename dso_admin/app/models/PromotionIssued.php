<?php

class PromotionIssued extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_promotions_issued';





//===========================================================================//
//																RELATIONSHIPS															//
//===========================================================================//

	public function basketItem() {
		return $this->belongsTo('BasketItem');
	}

	public function lineItem() {
		return $this->belongsTo('OrderItem', 'line_item_id');
	}

	public function order() {
		return $this->belongsTo('Order');
	}

	public function promotion() {
		return $this->belongsTo('Promotion');
	}

	public function user() {
		return $this->belongsTo('User');
	}



//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'discount_amount' => 'required',
		'promotion_code'  => 'required',
		'session_hash'    => 'required',

		//Foreign Keys
		'basket_item_id'  => 'required',
		'line_item_id'    => 'required',
		'order_id'        => 'required',
		'promotion_id'    => 'required',
		'user_id'         => 'required'
	);
}
