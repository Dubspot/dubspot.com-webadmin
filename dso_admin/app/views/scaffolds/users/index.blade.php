@extends('layouts.scaffold')

@section('main')

	<section class="large-8 columns">
		<h2>Search by user's email address</h2>
		{{ Form::open(['method' => 'GET', 'action'=>'UsersController@search'] )  }}
      <div class="row collapse">
        <div class="large-6 columns">
          	{{ Form::input('search', 'q', null, ['placeholder' => 'Search by email']) }}
        </div>
        <div class="large-6 columns">
          {{ Form::submit('Search', array('class'=>'button success radius postfix')) }}
        </div>
      </div>
		{{ Form::close() }}
	</section>


 <section class="large-12 columns ">


			@if (Session::has('message'))
				<div class="panel flash callout radius">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif

@if ($users->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Upgraded to 2.0 ?</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Moodle 1.9 User ID</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
			<tr>
				@if ($user->legacy)
					<td>{{ link_to_action('UsersController@upgrade', 'Upgrade to 2.0', $user->id, array('class' => 'button tiny radius')) }}</td>
				@else
					<td>{{ link_to_action('UsersController@upgrade', 'Downgrade to 1.9', $user->id, array('class' => 'button tiny radius alert')) }}</td>
				@endif
				<td>{{{ $user->email}}}</td>
				<td>{{{ $user->firstname }}}</td>
				<td>{{{ $user->lastname }}}</td>
				<td>{{{ $user->username }}}</td>
				<td>{{{ $user->moodle_user_id }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</section>

	{{ $users->links() }}

@else
	No results found
@endif

@stop
