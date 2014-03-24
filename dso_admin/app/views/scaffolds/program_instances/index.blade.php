@extends('layouts.scaffold')

@section('main')

<h1>All Program_instances</h1>

<p>{{ link_to_route('program_instances.create', 'Add new program_instance') }}</p>

@if ($program_instances->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Program_id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Status</th>
				<th>Is_active</th>
				<th>Is_deleted</th>
				<th>Is_full</th>
				<th>Location_id</th>
				<th>Identifier</th>
				<th>Date_description</th>
				<th>Class_type</th>
				<th>Duration_override</th>
				<th>Date_closeout_override</th>
				<th>Closeout_days_override</th>
				<th>Orbund_programmeCode</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($program_instances as $program_instance)
			<tr>
				<td>{{{ $program_instance->program_id }}}</td>
				<td>{{{ $program_instance->title }}}</td>
				<td>{{{ $program_instance->description }}}</td>
				<td>{{{ $program_instance->status }}}</td>
				<td>{{{ $program_instance->is_active }}}</td>
				<td>{{{ $program_instance->is_deleted }}}</td>
				<td>{{{ $program_instance->is_full }}}</td>
				<td>{{{ $program_instance->location_id }}}</td>
				<td>{{{ $program_instance->identifier }}}</td>
				<td>{{{ $program_instance->date_description }}}</td>
				<td>{{{ $program_instance->class_type }}}</td>
				<td>{{{ $program_instance->duration_override }}}</td>
				<td>{{{ $program_instance->date_closeout_override }}}</td>
				<td>{{{ $program_instance->closeout_days_override }}}</td>
				<td>{{{ $program_instance->orbund_programmeCode }}}</td>
				<td>{{ link_to_route('program_instances.show', 'Show', array($program_instance->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('program_instances.edit', 'Edit', array($program_instance->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('program_instances.destroy', $program_instance->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $program_instances->links() }}

@else
	There are no program_instances
@endif

@stop
