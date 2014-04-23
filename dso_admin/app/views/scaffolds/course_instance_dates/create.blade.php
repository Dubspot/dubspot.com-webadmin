@extends('layouts.scaffold')

@section('main')

<h1>Create Course_instance_date</h1>

{{ Form::open(array('route' => 'course_instance_dates.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


