<?php

class Product extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_products';





//===========================================================================//
//																RELATIONSHIPS														 	 //
//===========================================================================//

	public function basketItems() {
		return $this->hasMany('BasketItem');
	}

	public function orderItems() {
		return $this->hasMany('OrderItem');
	}

	public function productType()	{
		return $this->belongsTo('ProductType');
	}

	public function promotions() {
		return $this->belongsToMany('Promotion', 'ecommerce_products_to_promotions');
	}












//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//
	public static $rules = array(
		'is_active'                 => 'required',
		'is_deleted'                => 'required',
		'installments'              => 'required',
		'installment_markup'        => 'required',
		'online_payment_plan_price' => 'required',
		'payment_plan_price'        => 'required',
		'price'                     => 'required',
		'online_discount'           => 'required',
		'online_price'              => 'required',
		'show_online_price'         => 'required',
		'show_online_price_only'    => 'required',

		// Foreign Keys
		'product_object_id'         => 'required', // to do
		'product_type_id'           => 'required', // Done
		'wp_post_id'                => 'required'  // to do
	);
}
