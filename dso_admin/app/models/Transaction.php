<?php

class Transaction extends Eloquent {

	protected $guarded = array();






//===========================================================================//
//																RELATIONSHIPS															 //
//===========================================================================//

	public function orderItem() {
		return $this->belongsTo('OrderItem');
	}

	public function scheduledPayment() {
		return $this->belongsTo('ScheduledPayment');
	}



//===========================================================================//
//																VALDIATIONS																 //
//===========================================================================//

	public static $rules = array(
		// 'order_item_id'        => 'required',
		// 'scheduled_payment_id' => 'required', eliminate
		// 'sales_rep'            => 'required'
		// 'payment_status'       => 'required', eliminate
		// 'note'                 => 'required',
		// 'adjustments_applied'  => 'required', eliminate
		// 'adjustment_amount'    => 'required', eliminate
		// 'payment_review'       => 'required', eliminate
		// 'amount_paid'          => 'required', eliminate
		// 'balance'              => 'required', eliminate
		// 'payment_1_notes'      => 'required',
		// 'payment_2_method'     => 'required',
		// 'payment_2_notes'      => 'required',
		// 'payment_3_method'     => 'required',
		// 'payment_3_notes'      => 'required',
		// 'payment_4_method'     => 'required',
		// 'payment_4_notes'      => 'required',
		// 'payment_notes'        => 'required'

	);
}
