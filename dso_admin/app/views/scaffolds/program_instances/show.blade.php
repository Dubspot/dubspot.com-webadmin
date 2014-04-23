@extends('layouts.scaffold')

@section('main')

<h1>Show Program_instance</h1>

<p>{{ link_to_route('program_instances.index', 'Return to all program_instances') }}</p>

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
			<td>{{ link_to_route('program_instances.edit', 'Edit', array($program_instance->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('program_instances.destroy', $program_instance->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

<br><br><br><br>
<h1>It's Course Instances</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Course ID</th>
			<th>Instructor Id</th>
			<th>Status</th>
			<th>Location_id</th>
			<th>Course Start</th>
			<th>Course End</th>
			<th>Seats Min</th>
			<th>Seats Max</th>
			<th>Category</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Is_full</th>
			<th>Identifier</th>
			<th>Date_description</th>
			<th>Room ID</th>
			<th>Class_type</th>
			<th>Duration_override</th>
			<th>Date_closeout_override</th>
			<th>Closeout_days_override</th>
			<th>Orbund Class Name</th>
		</tr>
	</thead>

	<tbody>
	@foreach ($program_instance->courseInstances as $course_instance)
		<tr>
			<td>{{{ $course_instance->id }}}</td>
			<td>{{{ $course_instance->title }}}</td>
			<td>{{{ $course_instance->description }}}</td>
			<td>{{{ $course_instance->course_id }}}</td>
			<td>{{{ $course_instance->instructor_id }}}</td>
			<td>{{{ $course_instance->status }}}</td>
			<td>{{{ $course_instance->location_id }}}</td>
			<td>{{{ $course_instance->course_start }}}</td>
			<td>{{{ $course_instance->course_end }}}</td>
			<td>{{{ $course_instance->seats_min }}}</td>
			<td>{{{ $course_instance->seats_max }}}</td>
			<td>{{{ $course_instance->category }}}</td>
			<td>{{{ $course_instance->is_active }}}</td>
			<td>{{{ $course_instance->is_deleted }}}</td>
			<td>{{{ $course_instance->is_full }}}</td>
			<td>{{{ $course_instance->identifier }}}</td>
			<td>{{{ $course_instance->date_description }}}</td>
			<td>{{{ $course_instance->room_id }}}</td>
			<td>{{{ $course_instance->class_type }}}</td>
			<td>{{{ $course_instance->duration_override }}}</td>
			<td>{{{ $course_instance->date_closeout_override }}}</td>
			<td>{{{ $course_instance->closeout_days_override }}}</td>
			<td>{{{ $course_instance->orbund_class_name }}}</td>
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

@stop
