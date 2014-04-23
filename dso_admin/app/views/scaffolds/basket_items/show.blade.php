@extends('layouts.scaffold')

@section('main')

<h1>Show Basket_item</h1>

<p>{{ link_to_route('basket_items.index', 'Return to all basket_items') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Quantity</th>
			<th>Product_id</th>
			<th>Invoice_id</th>
			<th>User_id</th>
			<th>Session_hash</th>
			<th>Instance_id</th>
			<th>Installment_selected</th>
			<th>Instance_ids</th>
			<th>Price</th>
			<th>Is_deleted</th>
			<th>I_tax</th>
			<th>S_tax</th>
			<th>Title</th>
			<th>Description</th>
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
		<tr>
			<td>{{{ $basket_item->quantity }}}</td>
			<td>{{{ $basket_item->product_id }}}</td>
			<td>{{{ $basket_item->invoice_id }}}</td>
			<td>{{{ $basket_item->user_id }}}</td>
			<td>{{{ $basket_item->session_hash }}}</td>
			<td>{{{ $basket_item->instance_id }}}</td>
			<td>{{{ $basket_item->installment_selected }}}</td>
			<td>{{{ $basket_item->instance_ids }}}</td>
			<td>{{{ $basket_item->price }}}</td>
			<td>{{{ $basket_item->is_deleted }}}</td>
			<td>{{{ $basket_item->i_tax }}}</td>
			<td>{{{ $basket_item->s_tax }}}</td>
			<td>{{{ $basket_item->title }}}</td>
			<td>{{{ $basket_item->description }}}</td>
			<td>{{{ $basket_item->orbund_classname }}}</td>
			<td>{{{ $basket_item->orbund_class_id }}}</td>
			<td>{{{ $basket_item->location }}}</td>
			<td>{{{ $basket_item->date_description }}}</td>
			<td>{{{ $basket_item->start_date }}}</td>
			<td>{{{ $basket_item->end_date }}}</td>
			<td>{{{ $basket_item->orbund_price }}}</td>
			<td>{{{ $basket_item->orbund_online_price }}}</td>
			<td>{{{ $basket_item->orbund_class_group_id }}}</td>
			<td>{{{ $basket_item->orbund_class_group_name }}}</td>
			<td>{{{ $basket_item->orbund_program_code }}}</td>
			<td>{{{ $basket_item->orbund_class_group_ids }}}</td>
			<td>{{ link_to_route('basket_items.edit', 'Edit', array($basket_item->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('basket_items.destroy', $basket_item->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
