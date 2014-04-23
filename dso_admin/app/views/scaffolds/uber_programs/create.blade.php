@extends('layouts.scaffold')

@section('main')

<h1>Create Uber_program</h1>

{{ Form::open(array('route' => 'uber_programs.store')) }}
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
            {{ Form::label('wp_post_id', 'Wp_post_id:') }}
            {{ Form::input('number', 'wp_post_id') }}
        </li>

        <li>
            {{ Form::label('orbund_program_code', 'Orbund_program_code:') }}
            {{ Form::text('orbund_program_code') }}
        </li>

        <li>
            {{ Form::label('custom_location', 'Custom_location:') }}
            {{ Form::textarea('custom_location') }}
        </li>

        <li>
            {{ Form::label('custom_location_link', 'Custom_location_link:') }}
            {{ Form::textarea('custom_location_link') }}
        </li>

        <li>
            {{ Form::label('location_id', 'Location_id:') }}
            {{ Form::text('location_id') }}
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


