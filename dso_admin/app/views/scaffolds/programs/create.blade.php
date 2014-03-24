@extends('layouts.scaffold')

@section('main')

<h1>Create Program</h1>

{{ Form::open(array('route' => 'programs.store')) }}
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
            {{ Form::label('status', 'Status:') }}
            {{ Form::input('number', 'status') }}
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
            {{ Form::label('location_id', 'Location_id:') }}
            {{ Form::input('number', 'location_id') }}
        </li>

        <li>
            {{ Form::label('child_program_ids', 'Child_program_ids:') }}
            {{ Form::text('child_program_ids') }}
        </li>

        <li>
            {{ Form::label('wp_post_id', 'Wp_post_id:') }}
            {{ Form::input('number', 'wp_post_id') }}
        </li>

        <li>
            {{ Form::label('orbund_course_group_id', 'Orbund_course_group_id:') }}
            {{ Form::text('orbund_course_group_id') }}
        </li>

        <li>
            {{ Form::label('orbund_course_group_name', 'Orbund_course_group_name:') }}
            {{ Form::text('orbund_course_group_name') }}
        </li>

        <li>
            {{ Form::label('orbund_program_code', 'Orbund_program_code:') }}
            {{ Form::text('orbund_program_code') }}
        </li>

        <li>
            {{ Form::label('title_short', 'Title_short:') }}
            {{ Form::text('title_short') }}
        </li>

        <li>
            {{ Form::label('url_register', 'Url_register:') }}
            {{ Form::text('url_register') }}
        </li>

        <li>
            {{ Form::label('show_past_nyc', 'Show_past_nyc:') }}
            {{ Form::text('show_past_nyc') }}
        </li>

        <li>
            {{ Form::label('show_past_dso', 'Show_past_dso:') }}
            {{ Form::text('show_past_dso') }}
        </li>

        <li>
            {{ Form::label('url_program', 'Url_program:') }}
            {{ Form::text('url_program') }}
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


