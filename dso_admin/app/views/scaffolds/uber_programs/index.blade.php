@extends('layouts.scaffold')

@section('main')

<h1>All Uber_programs</h1>

<p>{{ link_to_route('uber_programs.create', 'Add new uber_program') }}</p>

@if ($uber_programs->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Status</th>
				<th>Is_active</th>
				<th>Is_deleted</th>
				<th>Wp_post_id</th>
				<th>Orbund_program_code</th>
				<th>Custom_location</th>
				<th>Custom_location_link</th>
				<th>Location_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($uber_programs as $uber_program)
			<tr>
				<td>{{{ $uber_program->title }}}</td>
				<td>{{{ $uber_program->description }}}</td>
				<td>{{{ $uber_program->status }}}</td>
				<td>{{{ $uber_program->is_active }}}</td>
				<td>{{{ $uber_program->is_deleted }}}</td>
				<td>{{{ $uber_program->wp_post_id }}}</td>
				<td>{{{ $uber_program->orbund_program_code }}}</td>
				<td>{{{ $uber_program->custom_location }}}</td>
				<td>{{{ $uber_program->custom_location_link }}}</td>
				<td>{{{ $uber_program->location_id }}}</td>
				<td>{{ link_to_route('uber_programs.show', 'Show', array($uber_program->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('uber_programs.edit', 'Edit', array($uber_program->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('uber_programs.destroy', $uber_program->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $uber_programs->links() }}

@else
	There are no uber_programs
@endif

@stop
