@extends('layouts.scaffold')

@section('main')

<h1>Create Promotion</h1>

{{ Form::open(array('route' => 'promotions.store')) }}
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
            {{ Form::label('discount', 'Discount:') }}
            {{ Form::text('discount') }}
        </li>

        <li>
            {{ Form::label('max_issues', 'Max_issues:') }}
            {{ Form::input('number', 'max_issues') }}
        </li>

        <li>
            {{ Form::label('max_issues_per_user', 'Max_issues_per_user:') }}
            {{ Form::input('number', 'max_issues_per_user') }}
        </li>

        <li>
            {{ Form::label('start_date', 'Start_date:') }}
            {{ Form::text('start_date') }}
        </li>

        <li>
            {{ Form::label('end_date', 'End_date:') }}
            {{ Form::text('end_date') }}
        </li>

        <li>
            {{ Form::label('promotion_code', 'Promotion_code:') }}
            {{ Form::text('promotion_code') }}
        </li>

        <li>
            {{ Form::label('locations', 'Locations:') }}
            {{ Form::text('locations') }}
        </li>

        <li>
            {{ Form::label('discount_type', 'Discount_type:') }}
            {{ Form::input('number', 'discount_type') }}
        </li>

        <li>
            {{ Form::label('last_updated', 'Last_updated:') }}
            {{ Form::text('last_updated') }}
        </li>

        <li>
            {{ Form::label('combinable', 'Combinable:') }}
            {{ Form::text('combinable') }}
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


