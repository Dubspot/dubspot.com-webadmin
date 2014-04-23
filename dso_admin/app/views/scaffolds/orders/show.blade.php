@extends('layouts.scaffold')

@section('main')

<h1>Show Order</h1>

<p>{{ link_to_route('orders.index', 'Return to all orders') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>First_name</th>
			<th>Last_name</th>
			<th>Demo</th>
			<th>User_id</th>
			<th>Shipping_address_id</th>
			<th>Billing_address_id</th>
			<th>Status</th>
			<th>Tax_total</th>
			<th>Order_total</th>
			<th>Manually_created</th>
			<th>Comments</th>
			<th>Alternate_order_id</th>
			<th>Is_deleted</th>
			<th>Discounted</th>
			<th>Discount_amount</th>
			<th>I_tax_total</th>
			<th>S_tax_total</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $order->first_name }}}</td>
			<td>{{{ $order->last_name }}}</td>
			<td>{{{ $order->demo }}}</td>
			<td>{{{ $order->user_id }}}</td>
			<td>{{{ $order->shipping_address_id }}}</td>
			<td>{{{ $order->billing_address_id }}}</td>
			<td>{{{ $order->status }}}</td>
			<td>{{{ $order->tax_total }}}</td>
			<td>{{{ $order->order_total }}}</td>
			<td>{{{ $order->manually_created }}}</td>
			<td>{{{ $order->comments }}}</td>
			<td>{{{ $order->alternate_order_id }}}</td>
			<td>{{{ $order->is_deleted }}}</td>
			<td>{{{ $order->discounted }}}</td>
			<td>{{{ $order->discount_amount }}}</td>
			<td>{{{ $order->i_tax_total }}}</td>
			<td>{{{ $order->s_tax_total }}}</td>
			<td>{{ link_to_route('orders.edit', 'Edit', array($order->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('orders.destroy', $order->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
