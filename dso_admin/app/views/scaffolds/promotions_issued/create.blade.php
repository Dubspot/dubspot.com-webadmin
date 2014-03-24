@extends('layouts.scaffold')

@section('main')

<h1>Create Promotion_issued</h1>

{{ Form::open(array('route' => 'promotions_issued.store')) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('promotion_id', 'Promotion_id:') }}
            {{ Form::input('number', 'promotion_id') }}
        </li>

        <li>
            {{ Form::label('promotion_code', 'Promotion_code:') }}
            {{ Form::text('promotion_code') }}
        </li>

        <li>
            {{ Form::label('discount_amount', 'Discount_amount:') }}
            {{ Form::text('discount_amount') }}
        </li>

        <li>
            {{ Form::label('session_hash', 'Session_hash:') }}
            {{ Form::text('session_hash') }}
        </li>

        <li>
            {{ Form::label('order_id', 'Order_id:') }}
            {{ Form::input('number', 'order_id') }}
        </li>

        <li>
            {{ Form::label('basket_item_id', 'Basket_item_id:') }}
            {{ Form::input('number', 'basket_item_id') }}
        </li>

        <li>
            {{ Form::label('line_item_id', 'Line_item_id:') }}
            {{ Form::input('number', 'line_item_id') }}
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


