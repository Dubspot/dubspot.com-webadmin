@extends('layouts.scaffold')

@section('main')

<h1>Edit Promotion_issued</h1>
{{ Form::model($promotion_issued, array('method' => 'PATCH', 'route' => array('promotions_issued.update', $promotion_issued->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('promotions_issued.show', 'Cancel', $promotion_issued->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
