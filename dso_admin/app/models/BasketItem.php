<?php

class BasketItem extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_basket_items';





//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function instance() {
		// return $this->(''); ?????
	}

	public function invoice() {
		return $this->belongsTo('Invoice');
	}

	public function product() {
		return $this->belongsTo('Product');
	}

	public function promotionsIssued() {
		return $this->hasMany('PromotionIssued');
	}

	public function user() {
		return $this->belongsTo('User');
	}




//===========================================================================//
//																VALDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'date_description'        => 'required',
		'description'             => 'required',
		'end_date'                => 'required',
		'i_tax'                   => 'required',
		'installment_selected'    => 'required',
		'is_deleted'              => 'required',
		'location'                => 'required',
		'orbund_class_group_id'   => 'required',
		'orbund_class_group_ids'  => 'required',
		'orbund_class_group_name' => 'required',
		'orbund_class_id'         => 'required',
		'orbund_classname'        => 'required',
		'orbund_online_price'     => 'required',
		'orbund_price'            => 'required',
		'orbund_program_code'     => 'required',
		'price'                   => 'required',
		'quantity'                => 'required',
		'session_hash'            => 'required',
		'start_date'              => 'required',
		's_tax'                   => 'required',
		'title'                   => 'required',

		// Foreign Keys
		'instance_id'             => 'required', // <<<<<<<<<<<<<<<< To Do - Establish and test relationship
		'instance_ids'            => 'required', // <<<<<<<<<<<<<<<< To Do - Establish and test relationship
		'invoice_id'              => 'required',
		'product_id'              => 'required',
		'user_id'                 => 'required'
	);
}
