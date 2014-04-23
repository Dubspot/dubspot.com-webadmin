@extends('layouts.scaffold')

@section('main')

<h1>All Course_instance_dates</h1>

<p>{{ link_to_route('course_instance_dates.create', 'Add new course_instance_date') }}</p>

@if ($course_instance_dates->count())
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
			@foreach ($course_instance_dates as $course_instance_date)
			<tr>
				<td>{{{ $course_instance_date->course_instance_id }}}</td>
				<td>{{{ $course_instance_date->instructor_id }}}</td>
				<td>{{{ $course_instance_date->location_id }}}</td>
				<td>{{{ $course_instance_date->course_date_start }}}</td>
				<td>{{{ $course_instance_date->course_date_end }}}</td>
				<td>{{{ $course_instance_date->is_deleted }}}</td>
				<td>{{{ $course_instance_date->room_id }}}</td>
				<td>{{ link_to_route('course_instance_dates.show', 'Show', array($course_instance_date->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('course_instance_dates.edit', 'Edit', array($course_instance_date->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('course_instance_dates.destroy', $course_instance_date->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $course_instance_dates->links() }}

@else
	There are no course_instance_dates
@endif

@stop
