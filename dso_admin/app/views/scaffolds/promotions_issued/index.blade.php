@extends('layouts.scaffold')

@section('main')

<h1>All Promotions_issued</h1>

<p>{{ link_to_route('promotions_issued.create', 'Add new promotion_issued') }}</p>

@if ($promotions_issued->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Promotion_id</th>
				<th>Promotion_code</th>
				<th>Discount_amount</th>
				<th>Session_hash</th>
				<th>Order_id</th>
				<th>Basket_item_id</th>
				<th>Line_item_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($promotions_issued as $promotion_issued)
			<tr>
				<td>{{{ $promotion_issued->user_id }}}</td>
				<td>{{{ $promotion_issued->promotion_id }}}</td>
				<td>{{{ $promotion_issued->promotion_code }}}</td>
				<td>{{{ $promotion_issued->discount_amount }}}</td>
				<td>{{{ $promotion_issued->session_hash }}}</td>
				<td>{{{ $promotion_issued->order_id }}}</td>
				<td>{{{ $promotion_issued->basket_item_id }}}</td>
				<td>{{{ $promotion_issued->line_item_id }}}</td>
				<td>{{ link_to_route('promotions_issued.show', 'Show', array($promotion_issued->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('promotions_issued.edit', 'Edit', array($promotion_issued->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('promotions_issued.destroy', $promotion_issued->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $promotions_issued->links() }}

@else
	There are no promotions_issued
@endif

@stop
