@extends('layouts.scaffold')

@section('main')

<h1>Edit Room</h1>
{{ Form::model($room, array('method' => 'PATCH', 'route' => array('rooms.update', $room->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('rooms.show', 'Cancel', $room->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
