@extends('layouts.scaffold')

@section('main')

<h1>All S_taxes</h1>

<p>{{ link_to_route('s_taxes.create', 'Add new s_tax') }}</p>

@if ($s_taxes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>State</th>
				<th>Rate</th>
				<th>Multiplier</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($s_taxes as $s_tax)
			<tr>
				<td>{{{ $s_tax->state }}}</td>
				<td>{{{ $s_tax->rate }}}</td>
				<td>{{{ $s_tax->multiplier }}}</td>
				<td>{{ link_to_route('s_taxes.show', 'Show', array($s_tax->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('s_taxes.edit', 'Edit', array($s_tax->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('s_taxes.destroy', $s_tax->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $s_taxes->links() }}

@else
	There are no s_taxes
@endif

@stop
