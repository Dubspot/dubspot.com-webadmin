@extends('layouts.scaffold')

@section('main')

<h1>Create Order_item</h1>

{{ Form::open(array('route' => 'order_items.store')) }}
	<ul>
        <li>
            {{ Form::label('order_id', 'Order_id:') }}
            {{ Form::input('number', 'order_id') }}
        </li>

        <li>
            {{ Form::label('quantity', 'Quantity:') }}
            {{ Form::input('number', 'quantity') }}
        </li>

        <li>
            {{ Form::label('product_id', 'Product_id:') }}
            {{ Form::input('number', 'product_id') }}
        </li>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('price', 'Price:') }}
            {{ Form::text('price') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('i_tax', 'I_tax:') }}
            {{ Form::text('i_tax') }}
        </li>

        <li>
            {{ Form::label('s_tax', 'S_tax:') }}
            {{ Form::text('s_tax') }}
        </li>

        <li>
            {{ Form::label('instance_id', 'Instance_id:') }}
            {{ Form::input('number', 'instance_id') }}
        </li>

        <li>
            {{ Form::label('installment_selected', 'Installment_selected:') }}
            {{ Form::text('installment_selected') }}
        </li>

        <li>
            {{ Form::label('instance_ids', 'Instance_ids:') }}
            {{ Form::text('instance_ids') }}
        </li>

        <li>
            {{ Form::label('orbund_classname', 'Orbund_classname:') }}
            {{ Form::text('orbund_classname') }}
        </li>

        <li>
            {{ Form::label('orbund_class_id', 'Orbund_class_id:') }}
            {{ Form::text('orbund_class_id') }}
        </li>

        <li>
            {{ Form::label('location', 'Location:') }}
            {{ Form::text('location') }}
        </li>

        <li>
            {{ Form::label('date_description', 'Date_description:') }}
            {{ Form::text('date_description') }}
        </li>

        <li>
            {{ Form::label('start_date', 'Start_date:') }}
            {{ Form::text('start_date') }}
        </li>

        <li>
            {{ Form::label('end_date', 'End_date:') }}
            {{ Form::text('end_date') }}
        </li>

        <li>
            {{ Form::label('orbund_price', 'Orbund_price:') }}
            {{ Form::text('orbund_price') }}
        </li>

        <li>
            {{ Form::label('orbund_online_price', 'Orbund_online_price:') }}
            {{ Form::text('orbund_online_price') }}
        </li>

        <li>
            {{ Form::label('orbund_class_group_id', 'Orbund_class_group_id:') }}
            {{ Form::text('orbund_class_group_id') }}
        </li>

        <li>
            {{ Form::label('orbund_class_group_name', 'Orbund_class_group_name:') }}
            {{ Form::text('orbund_class_group_name') }}
        </li>

        <li>
            {{ Form::label('orbund_program_code', 'Orbund_program_code:') }}
            {{ Form::text('orbund_program_code') }}
        </li>

        <li>
            {{ Form::label('orbund_class_group_ids', 'Orbund_class_group_ids:') }}
            {{ Form::text('orbund_class_group_ids') }}
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


