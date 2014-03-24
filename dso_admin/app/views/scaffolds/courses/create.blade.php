@extends('layouts.scaffold')

@section('main')

<h1>Create Course</h1>

{{ Form::open(array('route' => 'courses.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('instructor_id', 'Instructor_id:') }}
            {{ Form::input('number', 'instructor_id') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::input('number', 'status') }}
        </li>

        <li>
            {{ Form::label('location_id', 'Location_id:') }}
            {{ Form::input('number', 'location_id') }}
        </li>

        <li>
            {{ Form::label('seats_min', 'Seats_min:') }}
            {{ Form::input('number', 'seats_min') }}
        </li>

        <li>
            {{ Form::label('seats_max', 'Seats_max:') }}
            {{ Form::input('number', 'seats_max') }}
        </li>

        <li>
            {{ Form::label('is_active', 'Is_active:') }}
            {{ Form::text('is_active') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('wp_post_id', 'Wp_post_id:') }}
            {{ Form::input('number', 'wp_post_id') }}
        </li>

        <li>
            {{ Form::label('orbund_course_number', 'Orbund_course_number:') }}
            {{ Form::text('orbund_course_number') }}
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


