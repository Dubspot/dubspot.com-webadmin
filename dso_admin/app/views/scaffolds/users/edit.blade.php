@extends('layouts.scaffold')

@section('main')

<h1>Edit User</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
	<ul>
        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('facebook_user_id', 'Facebook_user_id:') }}
            {{ Form::text('facebook_user_id') }}
        </li>

        <li>
            {{ Form::label('facebook_session_key', 'Facebook_session_key:') }}
            {{ Form::text('facebook_session_key') }}
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
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('address_id', 'Address_id:') }}
            {{ Form::input('number', 'address_id') }}
        </li>

        <li>
            {{ Form::label('profile_image_id', 'Profile_image_id:') }}
            {{ Form::input('number', 'profile_image_id') }}
        </li>

        <li>
            {{ Form::label('role', 'Role:') }}
            {{ Form::text('role') }}
        </li>

        <li>
            {{ Form::label('suspended', 'Suspended:') }}
            {{ Form::text('suspended') }}
        </li>

        <li>
            {{ Form::label('found_how', 'Found_how:') }}
            {{ Form::textarea('found_how') }}
        </li>

        <li>
            {{ Form::label('password_hash', 'Password_hash:') }}
            {{ Form::text('password_hash') }}
        </li>

        <li>
            {{ Form::label('reset_hash', 'Reset_hash:') }}
            {{ Form::text('reset_hash') }}
        </li>

        <li>
            {{ Form::label('activation_hash', 'Activation_hash:') }}
            {{ Form::text('activation_hash') }}
        </li>

        <li>
            {{ Form::label('activation_attempts', 'Activation_attempts:') }}
            {{ Form::input('number', 'activation_attempts') }}
        </li>

        <li>
            {{ Form::label('activated', 'Activated:') }}
            {{ Form::text('activated') }}
        </li>

        <li>
            {{ Form::label('last_updated', 'Last_updated:') }}
            {{ Form::text('last_updated') }}
        </li>

        <li>
            {{ Form::label('created', 'Created:') }}
            {{ Form::text('created') }}
        </li>

        <li>
            {{ Form::label('is_deleted', 'Is_deleted:') }}
            {{ Form::text('is_deleted') }}
        </li>

        <li>
            {{ Form::label('send_updates', 'Send_updates:') }}
            {{ Form::text('send_updates') }}
        </li>

        <li>
            {{ Form::label('wp_user_id', 'Wp_user_id:') }}
            {{ Form::input('number', 'wp_user_id') }}
        </li>

        <li>
            {{ Form::label('biography', 'Biography:') }}
            {{ Form::textarea('biography') }}
        </li>

        <li>
            {{ Form::label('influences', 'Influences:') }}
            {{ Form::textarea('influences') }}
        </li>

        <li>
            {{ Form::label('interests', 'Interests:') }}
            {{ Form::textarea('interests') }}
        </li>

        <li>
            {{ Form::label('moodle_user_id', 'Moodle_user_id:') }}
            {{ Form::input('number', 'moodle_user_id') }}
        </li>

        <li>
            {{ Form::label('birthday', 'Birthday:') }}
            {{ Form::text('birthday') }}
        </li>

        <li>
            {{ Form::label('contact_email', 'Contact_email:') }}
            {{ Form::text('contact_email') }}
        </li>

        <li>
            {{ Form::label('origin_country', 'Origin_country:') }}
            {{ Form::text('origin_country') }}
        </li>

        <li>
            {{ Form::label('stage_name', 'Stage_name:') }}
            {{ Form::text('stage_name') }}
        </li>

        <li>
            {{ Form::label('birthday_display_style', 'Birthday_display_style:') }}
            {{ Form::text('birthday_display_style') }}
        </li>

        <li>
            {{ Form::label('location', 'Location:') }}
            {{ Form::text('location') }}
        </li>

        <li>
            {{ Form::label('orbund_id', 'Orbund_id:') }}
            {{ Form::text('orbund_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('users.show', 'Cancel', $user->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
