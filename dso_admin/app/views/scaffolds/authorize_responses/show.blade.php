@extends('layouts.scaffold')

@section('main')

<h1>Show Authorize_response</h1>

<p>{{ link_to_route('authorize_responses.index', 'Return to all authorize_responses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Order_id</th>
			<th>User_id</th>
			<th>Scheduled_payment_id</th>
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
			<th>Payment_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $authorize_response->order_id }}}</td>
			<td>{{{ $authorize_response->user_id }}}</td>
			<td>{{{ $authorize_response->scheduled_payment_id }}}</td>
			<td>{{{ $authorize_response->card_name }}}</td>
			<td>{{{ $authorize_response->card_type }}}</td>
			<td>{{{ $authorize_response->card_suffix }}}</td>
			<td>{{{ $authorize_response->card_expiry }}}</td>
			<td>{{{ $authorize_response->status }}}</td>
			<td>{{{ $authorize_response->authcode }}}</td>
			<td>{{{ $authorize_response->transid }}}</td>
			<td>{{{ $authorize_response->avs }}}</td>
			<td>{{{ $authorize_response->amount }}}</td>
			<td>{{{ $authorize_response->preauth }}}</td>
			<td>{{{ $authorize_response->address_id }}}</td>
			<td>{{{ $authorize_response->decline_type }}}</td>
			<td>{{{ $authorize_response->cvv }}}</td>
			<td>{{{ $authorize_response->offenders }}}</td>
			<td>{{{ $authorize_response->raw_response }}}</td>
			<td>{{{ $authorize_response->action }}}</td>
			<td>{{{ $authorize_response->checkno }}}</td>
			<td>{{{ $authorize_response->is_deleted }}}</td>
			<td>{{{ $authorize_response->recurring_result_code }}}</td>
			<td>{{{ $authorize_response->recurring_message_code }}}</td>
			<td>{{{ $authorize_response->recurring_message_text }}}</td>
			<td>{{{ $authorize_response->recurring_subscription_id }}}</td>
			<td>{{{ $authorize_response->routing_number }}}</td>
			<td>{{{ $authorize_response->bank_account_suffix }}}</td>
			<td>{{{ $authorize_response->payment_id }}}</td>
      <td>{{ link_to_route('authorize_responses.edit', 'Edit', array($authorize_response->id), array('class' => 'btn btn-info')) }}</td>
      <td>
	      {{ Form::open(array('method' => 'DELETE', 'route' => array('authorize_responses.destroy', $authorize_response->id))) }}
	        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
	      {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
