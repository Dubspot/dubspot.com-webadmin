@extends('layouts.scaffold')

@section('main')

<h1>Create Room</h1>

{{ Form::open(array('route' => 'rooms.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('
location_id', '
Location_id:') }}
            {{ Form::text('
location_id') }}
        </li>

        <li>
            {{ Form::label('
seats_max', '
Seats_max:') }}
            {{ Form::text('
seats_max') }}
        </li>

        <li>
            {{ Form::label('
is_active', '
Is_active:') }}
            {{ Form::text('
is_active') }}
        </li>

        <li>
            {{ Form::label('
is_deleted', '
Is_deleted:') }}
            {{ Form::text('
is_deleted') }}
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


