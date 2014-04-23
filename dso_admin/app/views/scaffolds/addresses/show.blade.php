@extends('layouts.scaffold')

@section('main')

<h1>Show Address</h1>

<p>{{ link_to_route('addresses.index', 'Return to all addresses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Address1</th>
			<th>Address2</th>
			<th>City</th>
			<th>Province</th>
			<th>Postcode</th>
			<th>Country</th>
			<th>Phone</th>
			<th>Address_type</th>
			<th>User_id</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Mobile_phone</th>
			<th>Email</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $address->address1 }}}</td>
			<td>{{{ $address->address2 }}}</td>
			<td>{{{ $address->city }}}</td>
			<td>{{{ $address->province }}}</td>
			<td>{{{ $address->postcode }}}</td>
			<td>{{{ $address->country }}}</td>
			<td>{{{ $address->phone }}}</td>
			<td>{{{ $address->address_type }}}</td>
			<td>{{{ $address->user_id }}}</td>
			<td>{{{ $address->firstname }}}</td>
			<td>{{{ $address->lastname }}}</td>
			<td>{{{ $address->mobile_phone }}}</td>
			<td>{{{ $address->email }}}</td>
      <td>{{ link_to_route('addresses.edit', 'Edit', array($address->id), array('class' => 'btn btn-info')) }}</td>
      <td>
        {{ Form::open(array('method' => 'DELETE', 'route' => array('addresses.destroy', $address->id))) }}
          {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
