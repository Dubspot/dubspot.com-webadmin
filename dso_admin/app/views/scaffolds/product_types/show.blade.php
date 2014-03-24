@extends('layouts.scaffold')

@section('main')

<h1>Show Product_type</h1>

<p>{{ link_to_route('product_types.index', 'Return to all product_types') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $product_type->title }}}</td>
			<td>{{{ $product_type->is_active }}}</td>
			<td>{{{ $product_type->is_deleted }}}</td>
			<td>{{ link_to_route('product_types.edit', 'Edit', array($product_type->id), array('class' => 'btn btn-info')) }}</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'route' => array('product_types.destroy', $product_type->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
