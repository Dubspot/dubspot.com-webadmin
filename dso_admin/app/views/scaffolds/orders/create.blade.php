@extends('layouts.scaffold')

@section('main')

<h1>Create Order</h1>

{{ Form::open(array('route' => 'orders.store')) }}
	<ul>
        <li>
            {{ Form::label('first_name', 'First_name:') }}
            {{ Form::text('first_name') }}
        </li>

        <li>
            {{ Form::label('last_name', 'Last_name:') }}
            {{ Form::text('last_name') }}
        </li>

        <li>
            {{ Form::label('demo', 'Demo:') }}
            {{ Form::text('demo') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('shipping_address_id', 'Shipping_address_id:') }}
            {{ Form::input('number', 'shipping_address_id') }}
        </li>

        <li>
            {{ Form::label('billing_address_id', 'Billing_address_id:') }}
            {{ Form::input('number', 'billing_address_id') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::input('number', 'status') }}
        </li>

        <li>
            {{ Form::label('tax_total', 'Tax_total:') }}
            {{ Form::text('tax_total') }}
        </li>

        <li>
            {{ Form::label('order_total', 'Order_total:') }}
            {{ Form::text('order_total') }}
        </li>

        <li>
            {{ Form::label('manually_created', 'Manually_created:') }}
            {{ Form::text('manually_created') }}
        </li>

        <li>
            {{ Form::label('comments', 'Comments:') }}
            {{ Form::textarea('comments') }}
        </li>

        <li>
            {{ Form::label('alternate_order_id', 'Alternate_order_id:') }}
            {{ Form::input('number', 'alternate_order_id') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('discounted', 'Discounted:') }}
            {{ Form::text('discounted') }}
        </li>

        <li>
            {{ Form::label('discount_amount', 'Discount_amount:') }}
            {{ Form::text('discount_amount') }}
        </li>

        <li>
            {{ Form::label('i_tax_total', 'I_tax_total:') }}
            {{ Form::text('i_tax_total') }}
        </li>

        <li>
            {{ Form::label('s_tax_total', 'S_tax_total:') }}
            {{ Form::text('s_tax_total') }}
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


