@extends('layouts.scaffold')

@section('main')

<h1>Edit Course_instance</h1>
{{ Form::model($course_instance, array('method' => 'PATCH', 'route' => array('course_instances.update', $course_instance->id))) }}
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
            {{ Form::label('course_id', 'Course_id:') }}
            {{ Form::input('number', 'course_id') }}
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
            {{ Form::label('course_start', 'Course_start:') }}
            {{ Form::text('course_start') }}
        </li>

        <li>
            {{ Form::label('course_end', 'Course_end:') }}
            {{ Form::text('course_end') }}
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
            {{ Form::label('category', 'Category:') }}
            {{ Form::input('number', 'category') }}
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
            {{ Form::label('is_full', 'Is_full:') }}
            {{ Form::text('is_full') }}
        </li>

        <li>
            {{ Form::label('identifier', 'Identifier:') }}
            {{ Form::text('identifier') }}
        </li>

        <li>
            {{ Form::label('date_description', 'Date_description:') }}
            {{ Form::text('date_description') }}
        </li>

        <li>
            {{ Form::label('room_id', 'Room_id:') }}
            {{ Form::input('number', 'room_id') }}
        </li>

        <li>
            {{ Form::label('class_type', 'Class_type:') }}
            {{ Form::input('number', 'class_type') }}
        </li>

        <li>
            {{ Form::label('duration_override', 'Duration_override:') }}
            {{ Form::text('duration_override') }}
        </li>

        <li>
            {{ Form::label('date_closeout_override', 'Date_closeout_override:') }}
            {{ Form::input('number', 'date_closeout_override') }}
        </li>

        <li>
            {{ Form::label('closeout_days_override', 'Closeout_days_override:') }}
            {{ Form::input('number', 'closeout_days_override') }}
        </li>

        <li>
            {{ Form::label('orbund_class_name', 'Orbund_class_name:') }}
            {{ Form::text('orbund_class_name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('course_instances.show', 'Cancel', $course_instance->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
