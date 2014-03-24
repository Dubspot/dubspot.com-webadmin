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
			</tr>
		</thead>

		<tbody>
			@foreach ($transactions as $transaction)
				<tr>
					<td>{{{ $transaction->id }}}</td>
					<td>{{{ $transaction->date }}}</td>
					<td>{{{ $transaction->sales_rep }}}</td>
					<td>{{{ $transaction->payment_status }}}</td>
					<td>{{{ $transaction->first_name }}}</td>
					<td>{{{ $transaction->last_ame }}}</td>
					<td>{{{ $transaction->email }}}</td>
					<td>{{{ $transaction->phone }}}</td>
					<td>{{{ $transaction->title }}}</td>
					<td>{{{ $transaction->location }}}</td>
					<td>{{{ $transaction->note }}}</td>
					<td>{{{ $transaction->original_price }}}</td>
					<td>{{{ $transaction->adjustment }}}</td>
					<td>{{{ $transaction->adjustment_amount }}}</td>
					<td>{{{ $transaction->total }}}</td>
					<td>{{{ $transaction->payment_method }}}</td>
					<td>{{{ $transaction->payment_plan }}}</td>
					<td>{{{ $transaction->start_date }}}</td>
					<td>{{{ $transaction->end_date }}}</td>
					<td>{{{ $transaction->schedule }}}</td>
					<td>{{{ $transaction->payment_review }}}</td>
					<td>{{{ $transaction->amount_paid }}}</td>
					<td>{{{ $transaction->balance }}}</td>
					<td>{{{ $transaction->payment_1_date  }}}</td>
					<td>{{{ $transaction->payment_1_amount }}}</td>
					<td>{{{ $transaction->payment_1_method }}}</td>
					<td>{{{ $transaction->payment_1_notes }}}</td>
					<td>{{{ $transaction->payment_2_date }}}</td>
					<td>{{{ $transaction->payment_2_amount }}}</td>
					<td>{{{ $transaction->payment_2_method }}}</td>
					<td>{{{ $transaction->payment_2_notes }}}</td>
					<td>{{{ $transaction->payment_3_date }}}</td>
					<td>{{{ $transaction->payment_3_amount }}}</td>
					<td>{{{ $transaction->payment_3_method }}}</td>
					<td>{{{ $transaction->payment_3_notes }}}</td>
					<td>{{{ $transaction->payment_4_date }}}</td>
					<td>{{{ $transaction->payment_4_amount }}}</td>
					<td>{{{ $transaction->payment_4_method }}}</td>
					<td>{{{ $transaction->payment_4_notes }}}</td>
					<td>{{{ $transaction->payment_notes }}}</td>
					<td>{{{ $transaction->b_first_name }}}</td>
					<td>{{{ $transaction->b_last_name }}}</td>
					<td>{{{ $transaction->b_email }}}</td>
					<td>{{{ $transaction->b_phone }}}</td>
					<td>{{{ $transaction->b_address1 }}}</td>
					<td>{{{ $transaction->b_address2 }}}</td>
					<td>{{{ $transaction->b_city }}}</td>
					<td>{{{ $transaction->b_state }}}</td>
					<td>{{{ $transaction->b_zip }}}</td>
					<td>{{{ $transaction->b_country }}}</td>
					<td>{{{ $transaction->order_item_id }}}</td>
					<td>{{{ $transaction->order_id }}}</td>
					<td>{{{ $transaction->user_id }}}</td>
					<td>{{{ $transaction->product_id }}}</td>
					<td>{{{ $transaction->product_type_id }}}</td>
					<td>{{{ $transaction->product_object_id }}}</td>
					<td>{{{ $transaction->wp_post_id }}}</td>
					<td>{{{ $transaction->instance_id }}}</td>
					<td>{{{ $transaction->instance_ids }}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $transactions->links() }}

@else
	There are no transactions
@endif

@stop
