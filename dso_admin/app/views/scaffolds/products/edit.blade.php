@extends('layouts.scaffold')

@section('main')

<h1>Edit Product</h1>
{{ Form::model($product, array('method' => 'PATCH', 'route' => array('products.update', $product->id))) }}
	<ul>
        <li>
            {{ Form::label('price', 'Price:') }}
            {{ Form::text('price') }}
        </li>

        <li>
            {{ Form::label('product_type_id', 'Product_type_id:') }}
            {{ Form::input('number', 'product_type_id') }}
        </li>

        <li>
            {{ Form::label('product_object_id', 'Product_object_id:') }}
            {{ Form::input('number', 'product_object_id') }}
        </li>

        <li>
            {{ Form::label('is_active', 'Is_active:') }}
            {{ Form::text('is_active') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('installments', 'Installments:') }}
            {{ Form::input('number', 'installments') }}
        </li>

        <li>
            {{ Form::label('installment_markup', 'Installment_markup:') }}
            {{ Form::text('installment_markup') }}
        </li>

        <li>
            {{ Form::label('online_discount', 'Online_discount:') }}
            {{ Form::text('online_discount') }}
        </li>

        <li>
            {{ Form::label('wp_post_id', 'Wp_post_id:') }}
            {{ Form::input('number', 'wp_post_id') }}
        </li>

        <li>
            {{ Form::label('online_price', 'Online_price:') }}
            {{ Form::text('online_price') }}
        </li>

        <li>
            {{ Form::label('show_online_price', 'Show_online_price:') }}
            {{ Form::input('number', 'show_online_price') }}
        </li>

        <li>
            {{ Form::label('show_online_price_only', 'Show_online_price_only:') }}
            {{ Form::text('show_online_price_only') }}
        </li>

        <li>
            {{ Form::label('payment_plan_price', 'Payment_plan_price:') }}
            {{ Form::text('payment_plan_price') }}
        </li>

        <li>
            {{ Form::label('online_payment_plan_price', 'Online_payment_plan_price:') }}
            {{ Form::text('online_payment_plan_price') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('products.show', 'Cancel', $product->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
