@extends('layouts.scaffold')

@section('main')

<h1>Show Course_instance</h1>

<p>{{ link_to_route('course_instances.index', 'Return to all course_instances') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Course_id</th>
			<th>Instructor_id</th>
			<th>Status</th>
			<th>Location_id</th>
			<th>Course_start</th>
			<th>Course_end</th>
			<th>Seats_min</th>
			<th>Seats_max</th>
			<th>Category</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Is_full</th>
			<th>Identifier</th>
			<th>Date_description</th>
			<th>Room_id</th>
			<th>Class_type</th>
			<th>Duration_override</th>
			<th>Date_closeout_override</th>
			<th>Closeout_days_override</th>
			<th>Orbund_class_name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
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
			<td>{{ link_to_route('course_instances.edit', 'Edit', array($course_instance->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('course_instances.destroy', $course_instance->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
