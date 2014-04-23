@extends('layouts.scaffold')

@section('main')

<h1>All Payments</h1>

<p>{{ link_to_route('payments.create', 'Add new payment') }}</p>

@if ($payments->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Order_id</th>
				<th>Order_item_id</th>
				<th>User_id</th>
				<th>Payment_type</th>
				<th>Scheduled_payment_id</th>
				<th>Payment_date</th>
				<th>Card_name</th>
				<th>Card_type</th>
				<th>Card_suffix</th>
				<th>Card_expiry</th>
				<th>Status</th>
				<th>Authcode</th>
				<th>Transid</th>
				<th>Avs</th>
				<th>Amount</th>
				<th>Preauth</th>
				<th>Address_id</th>
				<th>Decline_type</th>
				<th>Cvv</th>
				<th>Offenders</th>
				<th>Raw_response</th>
				<th>Action</th>
				<th>Checkno</th>
				<th>Is_deleted</th>
				<th>Recurring_result_code</th>
				<th>Recurring_message_code</th>
				<th>Recurring_message_text</th>
				<th>Recurring_subscription_id</th>
				<th>Routing_number</th>
				<th>Bank_account_suffix</th>
				<th>Notes</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($payments as $payment)
			<tr>
				<td>{{{ $payment->order_id }}}</td>
				<td>{{{ $payment->order_item_id }}}</td>
				<td>{{{ $payment->user_id }}}</td>
				<td>{{{ $payment->payment_type }}}</td>
				<td>{{{ $payment->scheduled_payment_id }}}</td>
				<td>{{{ $payment->payment_date }}}</td>
				<td>{{{ $payment->card_name }}}</td>
				<td>{{{ $payment->card_type }}}</td>
				<td>{{{ $payment->card_suffix }}}</td>
				<td>{{{ $payment->card_expiry }}}</td>
				<td>{{{ $payment->status }}}</td>
				<td>{{{ $payment->authcode }}}</td>
				<td>{{{ $payment->transid }}}</td>
				<td>{{{ $payment->avs }}}</td>
				<td>{{{ $payment->amount }}}</td>
				<td>{{{ $payment->preauth }}}</td>
				<td>{{{ $payment->address_id }}}</td>
				<td>{{{ $payment->decline_type }}}</td>
				<td>{{{ $payment->cvv }}}</td>
				<td>{{{ $payment->offenders }}}</td>
				<td>{{{ $payment->raw_response }}}</td>
				<td>{{{ $payment->action }}}</td>
				<td>{{{ $payment->checkno }}}</td>
				<td>{{{ $payment->is_deleted }}}</td>
				<td>{{{ $payment->recurring_result_code }}}</td>
				<td>{{{ $payment->recurring_message_code }}}</td>
				<td>{{{ $payment->recurring_message_text }}}</td>
				<td>{{{ $payment->recurring_subscription_id }}}</td>
				<td>{{{ $payment->routing_number }}}</td>
				<td>{{{ $payment->bank_account_suffix }}}</td>
				<td>{{{ $payment->notes }}}</td>
				<td>{{ link_to_route('payments.show', 'Show', array($payment->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('payments.edit', 'Edit', array($payment->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('payments.destroy', $payment->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $payments->links() }}

@else
	There are no payments
@endif

@stop
