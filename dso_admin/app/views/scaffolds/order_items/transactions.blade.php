@extends('layouts.scaffold')

@section('main')

<h1>Master Transaction View</h1>

<p>{{ link_to_route('order_items.create', 'Add new order_item') }}</p>
@if ($order_items->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Date</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Title</th>
				<th>Location</th>
				<th>Original Price</th>
				<th>Order Total</th>
				<th>Payment Agreement</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Weekly Schedule</th>
				<th>Payment Date</th>
				<th>Amount</th>
				<th>Billing First</th>
				<th>Billing Last</th>
				<th>Billing Email</th>
				<th>Billing Phone</th>
				<th>Billing Address 1</th>
				<th>Billing Address 2</th>
				<th>Billing City</th>
				<th>Billing State</th>
				<th>Billing Zip</th>
				<th>Billing Country</th>
				<th>Order Items ID</th>
				<th>Order ID</th>
				<th>User ID</th>
				<th>Product ID</th>
				<th>Product Type ID</th>
				<th>Product Object ID</th>
				<th>WP Post ID</th>
				<th>Instance ID</th>
				<th>Instance IDs</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($order_items as $order_item)
			<tr>
				<td>{{{ $order_item->created }}}</td>
				<td>{{{ $order_item->user['firstname'] }}}</td>
				<td>{{{ $order_item->user['lastname'] }}}</td>
				<td>{{{ $order_item->user['email'] }}}</td>
				<td>{{{ $order_item->user->address['phone'] }}}</td>
				<td>'N/A'</td>
				<td>'N/A'</td>
				<td>{{{ $order_item->price }}}</td>
				<td>{{{ $order_item->order['order_total'] }}}</td>
				<td>{{{ $order_item->installment_selected }}}</td>
				<td>'N/A'</td>
				<td>'N/A'</td>
				<td>'N/A'</td>
				<td> 1 payment date</td>
				<td> 1 amount</td>
				<td>{{{ $order_item->order->billingAddress['firstname'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['lastname'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['email'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['phone'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['address1'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['address2'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['city'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['state'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['zip'] }}}</td>
				<td>{{{ $order_item->order->billingAddress['country'] }}}</td>
				<td>{{{ $order_item->id }}}</td>
				<td>{{{ $order_item->order_id }}}</td>
				<td>{{{ $order_item->user_id }}}</td>
				<td>{{{ $order_item->product_id }}}</td>
				<td>{{{ $order_item->product['product_type_id'] }}}</td>
				<td>{{{ $order_item->product['product_object_id'] }}}</td>
				<td>{{{ $order_item->product['wp_post_id'] }}}</td>
				<td>{{{ $order_item->instance_id }}}</td>
				<td>{{{ $order_item->instance_ids }}}</td>
				<td>'N/A'</td>
				<td>{{ link_to_route('order_items.edit', 'Edit', array($order_item->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('order_items.destroy', $order_item->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $order_items->links() }}

@else
	There are no order_items
@endif

@stop
