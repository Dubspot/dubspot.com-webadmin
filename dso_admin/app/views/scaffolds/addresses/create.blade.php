@extends('layouts.scaffold')

@section('main')

<h1>Create Address</h1>

{{ Form::open(array('route' => 'addresses.store')) }}
	<ul>
        <li>
            {{ Form::label('address1', 'Address1:') }}
            {{ Form::text('address1') }}
        </li>

        <li>
            {{ Form::label('address2', 'Address2:') }}
            {{ Form::text('address2') }}
        </li>

        <li>
            {{ Form::label('city', 'City:') }}
            {{ Form::text('city') }}
        </li>

        <li>
            {{ Form::label('province', 'Province:') }}
            {{ Form::text('province') }}
        </li>

        <li>
            {{ Form::label('postcode', 'Postcode:') }}
            {{ Form::text('postcode') }}
        </li>

        <li>
            {{ Form::label('country', 'Country:') }}
            {{ Form::text('country') }}
        </li>

        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('address_type', 'Address_type:') }}
            {{ Form::input('number', 'address_type') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('firstname', 'Firstname:') }}
            {{ Form::text('firstname') }}
        </li>

        <li>
            {{ Form::label('lastname', 'Lastname:') }}
            {{ Form::text('lastname') }}
        </li>

        <li>
            {{ Form::label('mobile_phone', 'Mobile_phone:') }}
            {{ Form::text('mobile_phone') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
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


