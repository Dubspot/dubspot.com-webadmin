@extends('layouts.scaffold')

@section('main')

<h1>Show Scheduled_payment</h1>

<p>{{ link_to_route('scheduled_payments.index', 'Return to all scheduled_payments') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>order_id</th>
			<th>Order_item_id</th>
			<th>User_id</th>
			<th>Payment_type</th>
			<th>Payment_date</th>
			<th>Card_name</th>
			<th>Card_type</th>
			<th>Card_suffix</th>
			<th>Card_expiry</th>
			<th>Status</th>
			<th>Avs</th>
			<th>Amount</th>
			<th>Address_id</th>
			<th>Decline_type</th>
			<th>Is_deleted</th>
			<th>Recurring_result_code</th>
			<th>Recurring_message_code</th>
			<th>Recurring_message_text</th>
			<th>Recurring_subscription_id</th>
			<th>Routing_number</th>
			<th>Bank_account_suffix</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $scheduled_payment->order_id }}}</td>
			<td>{{{ $scheduled_payment->order_item_id }}}</td>
			<td>{{{ $scheduled_payment->user_id }}}</td>
			<td>{{{ $scheduled_payment->payment_type }}}</td>
			<td>{{{ $scheduled_payment->payment_date }}}</td>
			<td>{{{ $scheduled_payment->card_name }}}</td>
			<td>{{{ $scheduled_payment->card_type }}}</td>
			<td>{{{ $scheduled_payment->card_suffix }}}</td>
			<td>{{{ $scheduled_payment->card_expiry }}}</td>
			<td>{{{ $scheduled_payment->status }}}</td>
			<td>{{{ $scheduled_payment->avs }}}</td>
			<td>{{{ $scheduled_payment->amount }}}</td>
			<td>{{{ $scheduled_payment->address_id }}}</td>
			<td>{{{ $scheduled_payment->decline_type }}}</td>
			<td>{{{ $scheduled_payment->is_deleted }}}</td>
			<td>{{{ $scheduled_payment->recurring_result_code }}}</td>
			<td>{{{ $scheduled_payment->recurring_message_code }}}</td>
			<td>{{{ $scheduled_payment->recurring_message_text }}}</td>
			<td>{{{ $scheduled_payment->recurring_subscription_id }}}</td>
			<td>{{{ $scheduled_payment->routing_number }}}</td>
			<td>{{{ $scheduled_payment->bank_account_suffix }}}</td>
			<td>{{ link_to_route('scheduled_payments.edit', 'Edit', array($scheduled_payment->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('scheduled_payments.destroy', $scheduled_payment->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
