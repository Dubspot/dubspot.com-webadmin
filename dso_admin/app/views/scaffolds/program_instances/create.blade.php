@extends('layouts.scaffold')

@section('main')

<h1>Create Program_instance</h1>

{{ Form::open(array('route' => 'program_instances.store')) }}
	<ul>
        <li>
            {{ Form::label('program_id', 'Program_id:') }}
            {{ Form::input('number', 'program_id') }}
        </li>

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
            {{ Form::label('is_full', 'Is_full:') }}
            {{ Form::text('is_full') }}
        </li>

        <li>
            {{ Form::label('location_id', 'Location_id:') }}
            {{ Form::input('number', 'location_id') }}
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
            {{ Form::label('orbund_programmeCode', 'Orbund_programmeCode:') }}
            {{ Form::text('orbund_programmeCode') }}
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


