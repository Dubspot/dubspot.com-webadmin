@extends('layouts.scaffold')

@section('main')

<h1>All Product_types</h1>

<p>{{ link_to_route('product_types.create', 'Add new product_type') }}</p>

@if ($product_types->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Is_active</th>
				<th>Is_deleted</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($product_types as $product_type)
			<tr>
				<td>{{{ $product_type->title }}}</td>
				<td>{{{ $product_type->is_active }}}</td>
				<td>{{{ $product_type->is_deleted }}}</td>
				<td>{{ link_to_route('product_types.show', 'Show', array($product_type->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('product_types.edit', 'Edit', array($product_type->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('product_types.destroy', $product_type->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $product_types->links() }}

@else
	There are no product_types
@endif

@stop
