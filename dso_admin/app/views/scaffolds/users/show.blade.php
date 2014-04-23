@extends('layouts.scaffold')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('users.index', 'Return to all users') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Username</th>
			<th>Facebook_user_id</th>
			<th>Facebook_session_key</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Address_id</th>
			<th>Profile_image_id</th>
			<th>Role</th>
			<th>Suspended</th>
			<th>Found_how</th>
			<th>Password_hash</th>
			<th>Reset_hash</th>
			<th>Activation_hash</th>
			<th>Activation_attempts</th>
			<th>Activated</th>
			<th>Last_updated</th>
			<th>Created</th>
			<th>Is_deleted</th>
			<th>Send_updates</th>
			<th>Wp_user_id</th>
			<th>Biography</th>
			<th>Influences</th>
			<th>Interests</th>
			<th>Moodle_user_id</th>
			<th>Birthday</th>
			<th>Contact_email</th>
			<th>Origin_country</th>
			<th>Stage_name</th>
			<th>Birthday_display_style</th>
			<th>Location</th>
			<th>Orbund_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $user->username }}}</td>
			<td>{{{ $user->facebook_user_id }}}</td>
			<td>{{{ $user->facebook_session_key }}}</td>
			<td>{{{ $user->firstname }}}</td>
			<td>{{{ $user->lastname }}}</td>
			<td>{{{ $user->email }}}</td>
			<td>{{{ $user->address_id }}}</td>
			<td>{{{ $user->profile_image_id }}}</td>
			<td>{{{ $user->role }}}</td>
			<td>{{{ $user->suspended }}}</td>
			<td>{{{ $user->found_how }}}</td>
			<td>{{{ $user->password_hash }}}</td>
			<td>{{{ $user->reset_hash }}}</td>
			<td>{{{ $user->activation_hash }}}</td>
			<td>{{{ $user->activation_attempts }}}</td>
			<td>{{{ $user->activated }}}</td>
			<td>{{{ $user->last_updated }}}</td>
			<td>{{{ $user->created }}}</td>
			<td>{{{ $user->is_deleted }}}</td>
			<td>{{{ $user->send_updates }}}</td>
			<td>{{{ $user->wp_user_id }}}</td>
			<td>{{{ $user->biography }}}</td>
			<td>{{{ $user->influences }}}</td>
			<td>{{{ $user->interests }}}</td>
			<td>{{{ $user->moodle_user_id }}}</td>
			<td>{{{ $user->birthday }}}</td>
			<td>{{{ $user->contact_email }}}</td>
			<td>{{{ $user->origin_country }}}</td>
			<td>{{{ $user->stage_name }}}</td>
			<td>{{{ $user->birthday_display_style }}}</td>
			<td>{{{ $user->location }}}</td>
			<td>{{{ $user->orbund_id }}}</td>
			<td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
