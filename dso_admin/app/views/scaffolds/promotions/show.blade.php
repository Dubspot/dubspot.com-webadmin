@extends('layouts.scaffold')

@section('main')

<h1>Show Promotion</h1>

<p>{{ link_to_route('promotions.index', 'Return to all promotions') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Discount</th>
			<th>Max_issues</th>
			<th>Max_issues_per_user</th>
			<th>Start_date</th>
			<th>End_date</th>
			<th>Promotion_code</th>
			<th>Locations</th>
			<th>Discount_type</th>
			<th>Last_updated</th>
			<th>Combinable</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $promotion->title }}}</td>
			<td>{{{ $promotion->description }}}</td>
			<td>{{{ $promotion->discount }}}</td>
			<td>{{{ $promotion->max_issues }}}</td>
			<td>{{{ $promotion->max_issues_per_user }}}</td>
			<td>{{{ $promotion->start_date }}}</td>
			<td>{{{ $promotion->end_date }}}</td>
			<td>{{{ $promotion->promotion_code }}}</td>
			<td>{{{ $promotion->locations }}}</td>
			<td>{{{ $promotion->discount_type }}}</td>
			<td>{{{ $promotion->last_updated }}}</td>
			<td>{{{ $promotion->combinable }}}</td>
			<td>{{ link_to_route('promotions.edit', 'Edit', array($promotion->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('promotions.destroy', $promotion->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
