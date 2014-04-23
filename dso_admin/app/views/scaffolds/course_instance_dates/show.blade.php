@extends('layouts.scaffold')

@section('main')

<h1>Show Course_instance_date</h1>

<p>{{ link_to_route('course_instance_dates.index', 'Return to all course_instance_dates') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Course_instance_id</th>
				<th>Instructor_id</th>
				<th>Location_id</th>
				<th>Course_date_start</th>
				<th>Course_date_end</th>
				<th>Is_deleted</th>
				<th>Room_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $course_instance_date->course_instance_id }}}</td>
			<td>{{{ $course_instance_date->instructor_id }}}</td>
			<td>{{{ $course_instance_date->location_id }}}</td>
			<td>{{{ $course_instance_date->course_date_start }}}</td>
			<td>{{{ $course_instance_date->course_date_end }}}</td>
			<td>{{{ $course_instance_date->is_deleted }}}</td>
			<td>{{{ $course_instance_date->room_id }}}</td>
			<td>{{ link_to_route('course_instance_dates.edit', 'Edit', array($course_instance_date->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('course_instance_dates.destroy', $course_instance_date->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
