@extends('layouts.scaffold')

@section('main')

<h1>Edit Location</h1>
{{ Form::model($location, array('method' => 'PATCH', 'route' => array('locations.update', $location->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
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
            {{ Form::label('online', 'Online:') }}
            {{ Form::text('online') }}
        </li>

        <li>
            {{ Form::label('title_short', 'Title_short:') }}
            {{ Form::text('title_short') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('locations.show', 'Cancel', $location->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
