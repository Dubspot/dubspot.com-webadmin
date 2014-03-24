@extends('layouts.scaffold')

@section('main')

<h1>Edit Payment</h1>
{{ Form::model($payment, array('method' => 'PATCH', 'route' => array('payments.update', $payment->id))) }}
	<ul>
        <li>
            {{ Form::label('order_id', 'Order_id:') }}
            {{ Form::input('number', 'order_id') }}
        </li>

        <li>
            {{ Form::label('order_item_id', 'Order_item_id:') }}
            {{ Form::input('number', 'order_item_id') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('payment_type', 'Payment_type:') }}
            {{ Form::input('number', 'payment_type') }}
        </li>

        <li>
            {{ Form::label('scheduled_payment_id', 'Scheduled_payment_id:') }}
            {{ Form::input('number', 'scheduled_payment_id') }}
        </li>

        <li>
            {{ Form::label('payment_date', 'Payment_date:') }}
            {{ Form::text('payment_date') }}
        </li>

        <li>
            {{ Form::label('card_name', 'Card_name:') }}
            {{ Form::text('card_name') }}
        </li>

        <li>
            {{ Form::label('card_type', 'Card_type:') }}
            {{ Form::text('card_type') }}
        </li>

        <li>
            {{ Form::label('card_suffix', 'Card_suffix:') }}
            {{ Form::text('card_suffix') }}
        </li>

        <li>
            {{ Form::label('card_expiry', 'Card_expiry:') }}
            {{ Form::text('card_expiry') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('authcode', 'Authcode:') }}
            {{ Form::text('authcode') }}
        </li>

        <li>
            {{ Form::label('transid', 'Transid:') }}
            {{ Form::text('transid') }}
        </li>

        <li>
            {{ Form::label('avs', 'Avs:') }}
            {{ Form::text('avs') }}
        </li>

        <li>
            {{ Form::label('amount', 'Amount:') }}
            {{ Form::text('amount') }}
        </li>

        <li>
            {{ Form::label('preauth', 'Preauth:') }}
            {{ Form::text('preauth') }}
        </li>

        <li>
            {{ Form::label('address_id', 'Address_id:') }}
            {{ Form::input('number', 'address_id') }}
        </li>

        <li>
            {{ Form::label('decline_type', 'Decline_type:') }}
            {{ Form::text('decline_type') }}
        </li>

        <li>
            {{ Form::label('cvv', 'Cvv:') }}
            {{ Form::text('cvv') }}
        </li>

        <li>
            {{ Form::label('offenders', 'Offenders:') }}
            {{ Form::text('offenders') }}
        </li>

        <li>
            {{ Form::label('raw_response', 'Raw_response:') }}
            {{ Form::textarea('raw_response') }}
        </li>

        <li>
            {{ Form::label('action', 'Action:') }}
            {{ Form::text('action') }}
        </li>

        <li>
            {{ Form::label('checkno', 'Checkno:') }}
            {{ Form::text('checkno') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('recurring_result_code', 'Recurring_result_code:') }}
            {{ Form::text('recurring_result_code') }}
        </li>

        <li>
            {{ Form::label('recurring_message_code', 'Recurring_message_code:') }}
            {{ Form::text('recurring_message_code') }}
        </li>

        <li>
            {{ Form::label('recurring_message_text', 'Recurring_message_text:') }}
            {{ Form::text('recurring_message_text') }}
        </li>

        <li>
            {{ Form::label('recurring_subscription_id', 'Recurring_subscription_id:') }}
            {{ Form::input('number', 'recurring_subscription_id') }}
        </li>

        <li>
            {{ Form::label('routing_number', 'Routing_number:') }}
            {{ Form::input('number', 'routing_number') }}
        </li>

        <li>
            {{ Form::label('bank_account_suffix', 'Bank_account_suffix:') }}
            {{ Form::input('number', 'bank_account_suffix') }}
        </li>

        <li>
            {{ Form::label('notes', 'Notes:') }}
            {{ Form::textarea('notes') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('payments.show', 'Cancel', $payment->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
