@extends('layouts.scaffold')

@section('main')

<h1>Create I_taxes</h1>

{{ Form::open(array('route' => 'i_taxes.store')) }}
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


