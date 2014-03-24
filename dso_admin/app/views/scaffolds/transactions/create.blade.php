@extends('layouts.scaffold')

@section('main')

<h1>Create Transaction</h1>

{{ Form::open(array('route' => 'transactions.store')) }}
	<ul>
        <li>
            {{ Form::label('order_item_id', 'Order_item_id:') }}
            {{ Form::input('number', 'order_item_id') }}
        </li>

        <li>
            {{ Form::label('scheduled_payment_id', 'Scheduled_payment_id:') }}
            {{ Form::input('number', 'scheduled_payment_id') }}
        </li>

        <li>
            {{ Form::label('sales_rep', 'Sales_rep:') }}
            {{ Form::text('sales_rep') }}
        </li>

        <li>
            {{ Form::label('payment_status', 'Payment_status:') }}
            {{ Form::text('payment_status') }}
        </li>

        <li>
            {{ Form::label('note', 'Note:') }}
            {{ Form::textarea('note') }}
        </li>

        <li>
            {{ Form::label('payment_method', 'Payment_method:') }}
            {{ Form::text('payment_method', 'AUTH (DUBSPOT.COM)') }}
        </li>

        <li>
            {{ Form::label('payment_review', 'Payment_review:') }}
            {{ Form::input('number', 'payment_review') }}
        </li>

        <li>
            {{ Form::label('amount_paid', 'Amount_paid:') }}
            {{ Form::text('amount_paid') }}
        </li>

        <li>
            {{ Form::label('balance', 'Balance:') }}
            {{ Form::text('balance') }}
        </li>

        <li>
            {{ Form::label('payment_1_notes', 'Payment_1_notes:') }}
            {{ Form::textarea('payment_1_notes') }}
        </li>

        <li>
            {{ Form::label('payment_2_method', 'Payment_2_method:') }}
            {{ Form::text('payment_2_method') }}
        </li>

        <li>
            {{ Form::label('payment_2_notes', 'Payment_2_notes:') }}
            {{ Form::textarea('payment_2_notes') }}
        </li>

        <li>
            {{ Form::label('payment_3_method', 'Payment_3_method:') }}
            {{ Form::text('payment_3_method') }}
        </li>

        <li>
            {{ Form::label('payment_3_notes', 'Payment_3_notes:') }}
            {{ Form::textarea('payment_3_notes') }}
        </li>

        <li>
            {{ Form::label('payment_4_method', 'Payment_4_method:') }}
            {{ Form::text('payment_4_method') }}
        </li>

        <li>
            {{ Form::label('payment_4_notes', 'Payment_4_notes:') }}
            {{ Form::textarea('payment_4_notes') }}
        </li>

        <li>
            {{ Form::label('payment_notes', 'Payment_notes:') }}
            {{ Form::textarea('payment_notes') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


