@extends('layouts.scaffold')

@section('main')

<h1>Show Course</h1>

<p>{{ link_to_route('courses.index', 'Return to all courses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Instructor_id</th>
			<th>Status</th>
			<th>Location_id</th>
			<th>Seats_min</th>
			<th>Seats_max</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Wp_post_id</th>
			<th>Orbund_course_number</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $course->title }}}</td>
			<td>{{{ $course->description }}}</td>
			<td>{{{ $course->instructor_id }}}</td>
			<td>{{{ $course->status }}}</td>
			<td>{{{ $course->location_id }}}</td>
			<td>{{{ $course->seats_min }}}</td>
			<td>{{{ $course->seats_max }}}</td>
			<td>{{{ $course->is_active }}}</td>
			<td>{{{ $course->is_deleted }}}</td>
			<td>{{{ $course->wp_post_id }}}</td>
			<td>{{{ $course->orbund_course_number }}}</td>
			<td>{{ link_to_route('courses.edit', 'Edit', array($course->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('courses.destroy', $course->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
