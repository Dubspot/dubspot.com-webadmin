<?php

class ProductType extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_product_types';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function products() {
		return $this->hasMany('Product');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'title'      => 'required',
		'is_active'  => 'required',
		'is_deleted' => 'required'
	);
}
