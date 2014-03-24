@extends('layouts.scaffold')

@section('main')

<h1>Show S_taxes</h1>

<p>{{ link_to_route('s_taxes.index', 'Return to all s_taxes') }}</p>

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
			<td>{{{ $s_tax->state }}}</td>
			<td>{{{ $s_tax->rate }}}</td>
			<td>{{{ $s_tax->multiplier }}}</td>
			<td>{{ link_to_route('s_taxes.edit', 'Edit', array($s_tax->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('s_taxes.destroy', $s_tax->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
