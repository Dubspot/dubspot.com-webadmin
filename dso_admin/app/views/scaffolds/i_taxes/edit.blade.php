@extends('layouts.scaffold')

@section('main')

<h1>Edit I_taxes</h1>
{{ Form::model($i_tax, array('method' => 'PATCH', 'route' => array('i_taxes.update', $i_tax->id))) }}
	<ul>
        <li>
            {{ Form::label('state', 'State:') }}
            {{ Form::text('state') }}
        </li>

        <li>
            {{ Form::label('rate', 'Rate:') }}
            {{ Form::text('rate') }}
        </li>

        <li>
            {{ Form::label('multiplier', 'Multiplier:') }}
            {{ Form::text('multiplier') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('i_taxes.show', 'Cancel', $i_tax->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
