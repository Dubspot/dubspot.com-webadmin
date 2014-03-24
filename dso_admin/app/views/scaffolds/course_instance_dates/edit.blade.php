@extends('layouts.scaffold')

@section('main')

<h1>Edit Course_instance_date</h1>
{{ Form::model($course_instance_date, array('method' => 'PATCH', 'route' => array('course_instance_dates.update', $course_instance_date->id))) }}
	<ul>
        <li>
            {{ Form::label('course_instance_id', 'Course_instance_id:') }}
            {{ Form::input('number', 'course_instance_id') }}
        </li>

        <li>
            {{ Form::label('instructor_id', 'Instructor_id:') }}
            {{ Form::input('number', 'instructor_id') }}
        </li>

        <li>
            {{ Form::label('location_id', 'Location_id:') }}
            {{ Form::input('number', 'location_id') }}
        </li>

        <li>
            {{ Form::label('course_date_start', 'Course_date_start:') }}
            {{ Form::text('course_date_start') }}
        </li>

        <li>
            {{ Form::label('course_date_end', 'Course_date_end:') }}
            {{ Form::text('course_date_end') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('room_id', 'Room_id:') }}
            {{ Form::input('number', 'room_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('course_instance_dates.show', 'Cancel', $course_instance_date->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
