@extends('layouts.scaffold')

@section('main')

<h1>All Rooms</h1>

<p>{{ link_to_route('rooms.create', 'Add new room') }}</p>

@if ($rooms->count())
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
			@foreach ($rooms as $room)
			<tr>
				<td>{{{ $room->title }}}</td>
				<td>{{{ $room->location_id }}}</td>
				<td>{{{ $room->seats_max }}}</td>
				<td>{{{ $room->is_active }}}</td>
				<td>{{{ $room->is_deleted }}}</td>
				<td>{{ link_to_route('rooms.show', 'Show', array($room->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('rooms.edit', 'Edit', array($room->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('rooms.destroy', $room->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $rooms->links() }}

@else
	There are no rooms
@endif

@stop
