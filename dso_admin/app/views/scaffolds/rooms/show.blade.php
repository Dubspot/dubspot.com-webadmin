@extends('layouts.scaffold')

@section('main')

<h1>Show Room</h1>

<p>{{ link_to_route('rooms.index', 'Return to all rooms') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Location_id</th>
			<th>Seats_max</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $room->title }}}</td>
			<td>{{{ $room->location_id }}}</td>
			<td>{{{ $room->seats_max }}}</td>
			<td>{{{ $room->is_active }}}</td>
			<td>{{{ $room->is_deleted }}}</td>
			<td>{{ link_to_route('rooms.edit', 'Edit', array($room->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('rooms.destroy', $room->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
