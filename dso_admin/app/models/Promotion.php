<?php

class Promotion extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_promotions';





//===========================================================================//
//																RELATIONSHIPS															//
//===========================================================================//

	public function promotionsIssued()	{
		return $this->hasMany('PromotionIssued');
	}

	public function products() {
		return $this->belongsToMany('Product', 'ecommerce_products_to_promotions');
	}



//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'combinable'          => 'required',
		'description'         => 'required',
		'discount'            => 'required',
		'discount_type'       => 'required',
		'end_date'            => 'required',
		'last_updated'        => 'required',
		'locations'           => 'required',
		'max_issues'          => 'required',
		'max_issues_per_user' => 'required',
		'promotion_code'      => 'required',
		'start_date'          => 'required',
		'title'               => 'required'
	);
}
