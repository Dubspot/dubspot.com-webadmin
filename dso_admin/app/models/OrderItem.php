<?php

class OrderItem extends Eloquent {

	protected $guarded = array();
	protected $table = 'ecommerce_order_items';





//===========================================================================//
//																RELATIONSHIPS														 	 //
//===========================================================================//

	public function courseInstance() {
		return $this->belongsTo('CourseInstance', 'instance_id');
	}

	public function programInstance() {
		return $this->belongsTo('ProgramInstance', 'instance_id');
	}

	public function uberProgramInstance() {
		return $this->belongsTo('UberProgramInstance', 'instance_id');
	}

	public function order()	{
		return $this->belongsTo('Order');
	}

	public function payment()	{
		return $this->hasOne('Payment');
	}

	public function product()	{
		return $this->belongsTo('Product');
	}

	public function promotionsIssued() {
		return $this->hasMany('PromotionIssued', 'line_item_id');
	}

	public function scheduledPayments() {
		return $this->hasMany('ScheduledPayment');
	}

	public function transactions() {
		return $this->hasMany('Transaction');
	}

	public function user() {
		return $this->belongsTo('User');
	}





//===========================================================================//
//																VALIDATIONS																 //
//===========================================================================//

	public static $rules = array(
		'quantity'                => 'required',
		'title'                   => 'required',
		'description'             => 'required',
		'price'                   => 'required',
		'is_deleted'              => 'required',
		'i_tax'                   => 'required',
		's_tax'                   => 'required',
		'installment_selected'    => 'required',
		'instance_ids'            => 'required',
		'location'                => 'required',
		'date_description'        => 'required',
		'start_date'              => 'required',
		'end_date'                => 'required',
		'orbund_classname'        => 'required',
		'orbund_class_id'         => 'required',
		'orbund_price'            => 'required',
		'orbund_online_price'     => 'required',
		'orbund_class_group_id'   => 'required',
		'orbund_class_group_name' => 'required',
		'orbund_program_code'     => 'required',
		'orbund_class_group_ids'  => 'required',

		// Foreign Keys
		'order_id'                => 'required',
		'instance_id'             => 'required',
		'product_id'              => 'required',
		'user_id'                 => 'required'
	);
}
