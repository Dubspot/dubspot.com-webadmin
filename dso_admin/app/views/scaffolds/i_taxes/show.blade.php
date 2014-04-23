@extends('layouts.scaffold')

@section('main')

<h1>Show I_taxes</h1>

<p>{{ link_to_route('i_taxes.index', 'Return to all i_taxes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>State</th>
			<th>Rate</th>
			<th>Multiplier</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $i_tax->state }}}</td>
			<td>{{{ $i_tax->rate }}}</td>
			<td>{{{ $i_tax->multiplier }}}</td>
			<td>{{ link_to_route('i_taxes.edit', 'Edit', array($i_tax->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('i_taxes.destroy', $i_tax->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
