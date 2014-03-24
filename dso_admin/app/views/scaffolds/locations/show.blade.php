@extends('layouts.scaffold')

@section('main')

<h1>Show Location</h1>

<p>{{ link_to_route('locations.index', 'Return to all locations') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Online</th>
			<th>Title_short</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $location->title }}}</td>
			<td>{{{ $location->is_active }}}</td>
			<td>{{{ $location->is_deleted }}}</td>
			<td>{{{ $location->online }}}</td>
			<td>{{{ $location->title_short }}}</td>
			<td>{{ link_to_route('locations.edit', 'Edit', array($location->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('locations.destroy', $location->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
