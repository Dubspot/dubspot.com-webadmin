@extends('layouts.scaffold')

@section('main')

<h1>All Order_items</h1>

<p>{{ link_to_route('order_items.create', 'Add new order_item') }}</p>

@if ($order_items->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Order_id</th>
				<th>Quantity</th>
				<th>Product_id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Price</th>
				<th>User_id</th>
				<th>Is_deleted</th>
				<th>I_tax</th>
				<th>S_tax</th>
				<th>Instance_id</th>
				<th>Installment_selected</th>
				<th>Instance_ids</th>
				<th>Orbund_classname</th>
				<th>Orbund_class_id</th>
				<th>Location</th>
				<th>Date_description</th>
				<th>Start_date</th>
				<th>End_date</th>
				<th>Orbund_price</th>
				<th>Orbund_online_price</th>
				<th>Orbund_class_group_id</th>
				<th>Orbund_class_group_name</th>
				<th>Orbund_program_code</th>
				<th>Orbund_class_group_ids</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($order_items as $order_item)
			<tr>
				<td>{{{ $order_item->order_id }}}</td>
				<td>{{{ $order_item->quantity }}}</td>
				<td>{{{ $order_item->product_id }}}</td>
				<td>{{{ $order_item->title }}}</td>
				<td>{{{ $order_item->description }}}</td>
				<td>{{{ $order_item->price }}}</td>
				<td>{{{ $order_item->user_id }}}</td>
				<td>{{{ $order_item->is_deleted }}}</td>
				<td>{{{ $order_item->i_tax }}}</td>
				<td>{{{ $order_item->s_tax }}}</td>
				<td>{{{ $order_item->instance_id }}}</td>
				<td>{{{ $order_item->installment_selected }}}</td>
				<td>{{{ $order_item->instance_ids }}}</td>
				<td>{{{ $order_item->orbund_classname }}}</td>
				<td>{{{ $order_item->orbund_class_id }}}</td>
				<td>{{{ $order_item->location }}}</td>
				<td>{{{ $order_item->date_description }}}</td>
				<td>{{{ $order_item->start_date }}}</td>
				<td>{{{ $order_item->end_date }}}</td>
				<td>{{{ $order_item->orbund_price }}}</td>
				<td>{{{ $order_item->orbund_online_price }}}</td>
				<td>{{{ $order_item->orbund_class_group_id }}}</td>
				<td>{{{ $order_item->orbund_class_group_name }}}</td>
				<td>{{{ $order_item->orbund_program_code }}}</td>
				<td>{{{ $order_item->orbund_class_group_ids }}}</td>

				<td>{{ link_to_route('order_items.show', 'Show', array($order_item->id), array('class' => 'btn btn-info')) }}</td>
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
