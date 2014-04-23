@extends('layouts.scaffold')

@section('main')

<h1>All Transactions</h1>

<p>{{ link_to_route('transactions.create', 'Add new transaction') }}</p>

@if ($transactions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Trans ID</th>
				<th>Trans Date</th>
				<th>Sales Rep</th>
				<th>Payment_status</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Transaction Item</th>
				<th>Location</th>
				<th>Note</th>
				<th>Original Price</th>
				<th>Adjustments Applied</th>
				<th>Adjustment Amount</th>
				<th>Transaction Total</th>
				<th>Payment Method</th>
				<th>Payment Agreement</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Weekly Schedule</th>
				<th>Payment Review</th>
				<th>Paid</th>
				<th>Balance</th>
				<th>1st Payment Date</th>
				<th>1st Payment</th>
				<th>1st Payment Method</th>
				<th>1st Payment Notes</th>
				<th>2nd Payment Date</th>
				<th>2nd Payment</th>
				<th>2nd Payment Method</th>
				<th>2nd Payment Notes</th>
				<th>3rd Payment Date</th>
				<th>3rd Payment</th>
				<th>3rd Payment Method</th>
				<th>3rd Payment Notes</th>
				<th>4th Payment Date</th>
				<th>4th Payment</th>
				<th>4th Payment Method</th>
				<th>4th Payment Notes</th>
				<th>Pay / Collection Notes</th>
				<th>Billing First</th>
				<th>Billing Last</th>
				<th>Billing Email</th>
				<th>Billing Phone</th>
				<th>Billing Address 1</th>
				<th>Billing Address 2</th>
				<th>Billing City</th>
				<th>Billing State</th>
				<th>Billing Zip</th>
				<th>Billing Country</th>
				<th>Order Item ID</th>
				<th>Order ID</th>
				<th>User ID</th>
				<th>Product ID</th>
				<th>Product Type ID</th>
				<th>Product Object ID</th>
				<th>WP Post ID</th>
				<th>Instance ID</th>
				<th>Instance IDs</th>


				<th>Scheduled Payment ID</th>
				<th>Payment_review</th>
				<th>Amount_paid</th>
				<th>Balance</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($transactions as $transaction)

					<?php

						$payment_plan       = $transaction->orderItem->installment_selected == 1 ? true:false;
						$scheduled_payments = $transaction->orderItem->scheduledPayments;
					  $product_type_id		= $transaction->orderItem->product->product_type_id;

						$payment_2_amount   = "";
						$payment_2_date     = "";
						$payment_3_amount   = "";
						$payment_3_date     = "";
						$payment_4_amount   = "";
						$payment_4_date     = "";

						if (count($scheduled_payments) > 1) {
							$payment_2_amount = $scheduled_payments[0]->amount;
							$payment_3_amount = $scheduled_payments[1]->amount;
							$payment_4_amount = $scheduled_payments[2]->amount;
							$payment_2_date   = $scheduled_payments[0]->payment_date;
							$payment_3_date   = $scheduled_payments[1]->payment_date;
							$payment_4_date   = $scheduled_payments[2]->payment_date;
						}

						$transaction_total = $transaction->orderItem->price - ($transaction->orderItem->price * TransactionsHelper::getDiscount($transaction));
						$amount_paid = 0;
						if ($payment_plan) {
							foreach ($transaction->order_item->scheduledPayments as $payment) {
								$amount_paid += $payment->amount;
							}
						}
						$balance = $payment_plan ? $transaction_total - $amount_paid : "" ;
						$payment_review = $balance > 5 ? "Off" : "";



							if ($transaction->orderItem->instance_id != NULL) {


								if ($product_type_id==1) {
									$instance = CourseInstance::find($transaction->orderItem->instance_id);
									$start_date = $instance->course_start;
								}	elseif ($product_type_id==2) {
									$instances = ProgramInstance::find($transaction->orderItem->instance_id)->courseInstances;
									foreach ($instances as $instance) {
										$start_dates[]	=	$instance->course_start;
									}
									arsort($start_dates);
									$start_date = last($start_dates);
								}
							} else {
								$instance_ids = explode(",", $transaction->orderItem->instance_ids);
								foreach ($instance_ids as $instance_id) {
								  $instances = ProgramInstance::find($instance_id)->courseInstances;
									foreach ($instances as $instance) {
										$start_dates[]	=	$instance->course_start;
									}
								}
								arsort($start_dates);
								$start_date = last($start_dates);
							}



					 ?>

				<tr>
					<td>{{{ $transaction->id }}}</td>                              								                   <!-- Trans ID              																 						-->
					<td>{{{ $transaction->orderItem->created }}}</td>              								                   <!-- Trans Date            																 						-->
					<td>{{{ $transaction->sales_rep }}}</td>                       								                   <!-- Sales Rep             																 						-->
					<td>{{{ $transaction->payment_status }}}</td>                  								                   <!-- Payment Status        																 						-->
					<td>{{{ $transaction->orderItem->user->firstname }}}</td>      								                   <!-- First Name            																 						-->
					<td>{{{ $transaction->orderItem->user->lastname }}}</td>       								                   <!-- Last Name             																 						-->
					<td>{{{ $transaction->orderItem->user->email }}}</td>          								                   <!-- Email                 																 						-->
					<td>{{{ $transaction->orderItem->user->address->phone }}}</td> 								                   <!-- Phone                 																 						-->
					<td>{{{	TransactionsHelper::getProductTitle($transaction)	}}}</td>      			                   <!-- Transaction Item      							  								 						-->
					<td>{{{ $transaction->orderItem->location }}}</td>             								                   <!-- Location              																 						-->
					<td>{{{ $transaction->note }}}</td>                            								                   <!-- Note                  																 						-->
					<td>{{{ $transaction->orderItem->price }}}</td>                								                   <!-- Original Price        																 						-->
					<td>{{{ TransactionsHelper::getDiscount($transaction) }}}</td>             		                   <!-- Adjustments Applied                               		 						-->
					<td>{{{ $transaction->orderItem->price * TransactionsHelper::getDiscount($transaction) }}}</td>  <!-- Adjustment Amount   	    	                           						-->
					<td>{{{ $transaction_total }}}</td>                                                              <!-- Transaction Total      														     						-->
					<td>{{{ $transaction->payment_method }}}</td>                  								                   <!-- Payment Method         														     						-->
					<td>{{{ $payment_plan ? "Payment Plan" : "Full Payment" }}}</td> 							                   <!-- Payment Agreement 																		 						-->
					<td>{{{ $start_date }}}</td> 				   		  																									                   <!-- Start Date        TransactionsHelper::getStartDate($transaction)  -->
					<td>N/A</td>             																											                   <!-- End Date          TransactionsHelper::getEndDate($transaction)    -->
					<td>N/A</td>         																													                   <!-- Weekly Schedule   TransactionsHelper::getSchedule($transaction)   -->
					<td>{{{ $payment_review }}}</td>                  														                   <!-- Payment Review         																 						-->
					<td>{{{ $payment_plan ? $amount_paid : ""}}}</td>                     				                   <!-- Amount Paid           											 					 						-->
					<td>{{{ $balance }}}</td>                         														                   <!-- Balance               			 								 					 						-->
					<td>{{{ $transaction->orderItem->order->created }}}</td>											                   <!-- 1st Payment Date                                       						-->
					<td>{{{ $payment_plan ? $transaction_total/4 : $transaction_total }}}</td>		                   <!-- 1st Payment            							                   						-->
					<td>{{{ $transaction->payment_method }}}</td>																	                   <!-- 1st Payment Method                                     						-->
					<td>{{{ $transaction->payment_1_notes }}}</td>                 								                   <!-- 1st Payment Notes       															 						-->
					<td>{{{ $payment_2_date }}}</td>																							                   <!-- 2nd Payment Date 																		   						-->
					<td>{{{ $payment_2_amount }}}</td>																						                   <!-- 2nd Payment      																		   						-->
					<td>{{{ $transaction->payment_2_method }}}</td>																                   <!-- 2nd Payment Method                                     						-->
					<td>{{{ $transaction->payment_2_notes }}}</td>                 								                   <!-- 2nd Payment Notes       															 						-->
					<td>{{{ $payment_3_date }}}</td>																							                   <!-- 3rd Payment Date 																		   						-->
					<td>{{{ $payment_3_amount }}}</td>																						                   <!-- 3rd Payment      																		   						-->
					<td>{{{ $transaction->payment_3_method }}}</td>																                   <!-- 3rd Payment Method                                     						-->
					<td>{{{ $transaction->payment_3_notes }}}</td>                 								                   <!-- 3rd Payment Notes       															 						-->
					<td>{{{ $payment_4_date }}}</td>																							                   <!-- 4th Payment Date 																		   						-->
					<td>{{{ $payment_4_amount }}}</td>																						                   <!-- 4th Payment      																		   						-->
					<td>{{{ $transaction->payment_4_method }}}</td>																                   <!-- 4th Payment Method                                     						-->
					<td>{{{ $transaction->payment_4_notes }}}</td>																                   <!-- 4th Payment Notes                                      						-->
					<td>{{{ $transaction->payment_notes }}}</td>																	                   <!-- Pay / Collection Notes                                 						-->
					<td>{{{ $transaction->order_item->order->billingAddress->firstname }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->lastname }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->email }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->phone }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->address1 }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->address2 }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->city }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->province }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->postcode }}}</td>
					<td>{{{ $transaction->order_item->order->billingAddress->country }}}</td>
					<td>{{  link_to_route('order_items.show', $transaction->order_item_id, array($transaction->order_item_id)) }}</td>                                                <!-- Order Item ID  	-->
					<td>{{  link_to_route('orders.show', $transaction->order_item->order_id, array($transaction->order_item->order_id)) }}</td>                                       <!-- Order ID  	-->
					<td>{{  link_to_route('users.show', $transaction->order_item->user_id, array($transaction->order_item->user_id)) }}</td>                                          <!-- User ID  	-->
					<td>{{  link_to_route('products.show', $transaction->order_item->product_id, array($transaction->order_item->product_id)) }}</td>                                 <!-- Product ID  	-->
					<td>{{  link_to_route('product_types.show', $transaction->order_item->product->product_type_id, array($transaction->order_item->product->product_type_id)) }}</td><!-- Product Type ID  	-->
					<td>{{{ $transaction->order_item->product->product_object_id }}}</td>
					<td>{{{ $transaction->order_item->product->wp_post_id }}}</td>
					<td>{{{ $transaction->order_item->instance_id }}}</td>
					<td>{{{ $transaction->order_item->instance_ids }}}</td>

					<td>{{{ $transaction->scheduled_payment_id }}}</td>            <!-- Scheduled Payment ID  																-->


          <td>{{ link_to_route('transactions.show', 'Show', array($transaction->id), array('class' => 'btn btn-info')) }}</td>
          <td>{{ link_to_route('transactions.edit', 'Edit', array($transaction->id), array('class' => 'btn btn-info')) }}</td>
          <td>
            {{ Form::open(array('method' => 'DELETE', 'route' => array('transactions.destroy', $transaction->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
          </td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $transactions->links() }}

@else
	There are no transactions
@endif

@stop
