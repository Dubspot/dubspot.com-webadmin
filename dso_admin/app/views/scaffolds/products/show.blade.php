@extends('layouts.scaffold')

@section('main')

<h1>Show Product</h1>

<p>{{ link_to_route('products.index', 'Return to all products') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Price</th>
			<th>Product_type_id</th>
			<th>Product_object_id</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Installments</th>
			<th>Installment_markup</th>
			<th>Online_discount</th>
			<th>Wp_post_id</th>
			<th>Online_price</th>
			<th>Show_online_price</th>
			<th>Show_online_price_only</th>
			<th>Payment_plan_price</th>
			<th>Online_payment_plan_price</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $product->price }}}</td>
			<td>{{{ $product->product_type_id }}}</td>
			<td>{{{ $product->product_object_id }}}</td>
			<td>{{{ $product->is_active }}}</td>
			<td>{{{ $product->is_deleted }}}</td>
			<td>{{{ $product->installments }}}</td>
			<td>{{{ $product->installment_markup }}}</td>
			<td>{{{ $product->online_discount }}}</td>
			<td>{{{ $product->wp_post_id }}}</td>
			<td>{{{ $product->online_price }}}</td>
			<td>{{{ $product->show_online_price }}}</td>
			<td>{{{ $product->show_online_price_only }}}</td>
			<td>{{{ $product->payment_plan_price }}}</td>
			<td>{{{ $product->online_payment_plan_price }}}</td>
			<td>{{ link_to_route('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('products.destroy', $product->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
