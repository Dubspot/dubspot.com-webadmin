<?php

class	TransactionsHelper {


	/**
	 * Obtain the title of the product associated with a transaction
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	public static function getProductTitle($transaction)	{

	  $product_type_id = $transaction->orderItem->product->product_type_id;

		if ($product_type_id==1) {
			return CourseInstance::find($transaction->orderItem->instance_id)->title;
		}	elseif ($product_type_id==2) {
			return ProgramInstance::find($transaction->orderItem->instance_id)->title;
		}	else {
			return UberProgram::find($transaction->orderItem->product->product_object_id)->title;
		}
		return $product_title;
	}



	/**
	 * Obtain the start date of the product associated with a transaction
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	public static function getStartDate($transaction)	{
		$instances = ProgramInstance::find($transaction->order_item->instance_id)->courseInstances;
		foreach ($instances as $instance) {
			$start_dates[]	=	$instance->course_start;
		}
		 arsort($start_dates);
		 return last($start_dates);
	}



	/**
	 * Obtain the end date of the product associated with a transaction
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	public static function getEndDate($transaction)	{
		$instances = ProgramInstance::find($transaction->order_item->instance_id)->courseInstances;
		foreach ($instances as $instance) {
			$end_dates[] = $instance->course_end;
		}
		 arsort($end_dates);
		 return head($end_dates);
	}


	/**
	 * Obtain the weekly schedule of the product associated with a transaction
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	// public static function getSchedule($transaction)	{
	// 	$instances = ProgramInstance::find($transaction->order_item->instance_id)->courseInstances;
	// 	foreach ($instances as $instance) {
	// 		$end_dates[] = $instance->date_description;
	// 	}
	// 	 arsort($end_dates);
	// 	 return head($end_dates);
	// }





	/**
	 * Obtain the discount amount of an order associated with a transaction
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	public static function getDiscount($transaction)	{
		$order_items =	$transaction->order_item->order->order_items;
		$total_price = 0;
		foreach ($order_items as $order_item) {
			$item_prices[] =  $order_item->price;
			$total_price += $order_item->price;
		}

		return  1-($transaction->order_item->order->order_total/$total_price);
	}



	/**
	 * Obtain the Start and End dates of the product associated with a $transaction
	 * and the weekly schedule where available
	 *
	 * @param  object $transaction
	 * @return Response
	 */
	public static function getSchedule($transaction) {
		//
		// Get Start/End dates for Courses and Programs
		// Get Weekly Schedule for Courses
		//-------------------------------------------------------------------------
		if ($transaction->instance_id != NULL) {
			if ($transaction->product_type_id==1) {
				$instance                = CourseInstance::find($transaction->instance_id);
				$transaction->start_date = $instance->course_start;
				$transaction->end_date   = $instance->course_end;
				$transaction->schedule   = $instance->date_description;
			}	elseif ($transaction->product_type_id==2) {
				$instances = ProgramInstance::find($transaction->instance_id)->courseInstances;
				foreach ($instances as $instance) {
					$start_dates[]	=	$instance->course_start;
					$end_dates[]    = $instance->course_end;
					// $date_descriptions[] = $instance->date_description;
				}
				arsort($start_dates);
				$transaction->start_date = last($start_dates);
				$transaction->end_date   = last($end_dates);
				return;
			}
		}
		//
		// Get Start/End Dates for Uber Programs
		//-------------------------------------------------------------------------
		else {
			$instance_ids = explode(",", $transaction->instance_ids);
			foreach ($instance_ids as $instance_id) {
			  $instances = ProgramInstance::find($instance_id)->courseInstances;
				foreach ($instances as $instance) {
					$start_dates[]	=	$instance->course_start;
					$end_dates[]    = $instance->end_date;
				}
			}
			arsort($start_dates);
			$transaction->start_date = last($start_dates);
			$transaction->end_date   = head($end_dates);
			return;
		}
	}


	public static function getPaymentsInfo($transaction) {

		$transaction->payment_2_amount = $transaction->scheduled_payments[0]->amount;
		$transaction->payment_3_amount = $transaction->scheduled_payments[1]->amount;
		$transaction->payment_4_amount = $transaction->scheduled_payments[2]->amount;
		$transaction->payment_2_date   = $transaction->scheduled_payments[0]->payment_date;
		$transaction->payment_3_date   = $transaction->scheduled_payments[1]->payment_date;
		$transaction->payment_4_date   = $transaction->scheduled_payments[2]->payment_date;

		$transaction->amount_paid      = 0;
		foreach ($transaction->scheduled_payments as $payment) {
			$transaction->amount_paid += $payment->amount;
		}
		$transaction->balance = $transaction->total - $transaction->amount_paid;
		$payment_review = $transaction->balance > 5 ? "Off" : "";
		return;
	}





}