@extends('layouts.scaffold')

@section('main')

<h1>All Categories</h1>

<p>{{ link_to_route('categories.create', 'Add new category') }}</p>

@if ($categories->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Is_active</th>
				<th>Is_deleted</th>
				<th>Wp_post_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($categories as $category)
			<tr>
				<td>{{{ $category->title }}}</td>
				<td>{{{ $category->description }}}</td>
				<td>{{{ $category->is_active }}}</td>
				<td>{{{ $category->is_deleted }}}</td>
				<td>{{{ $category->wp_post_id }}}</td>
				<td>{{ link_to_route('categories.show', 'Show', array($category->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $categories->links() }}

@else
	There are no categories
@endif

@stop
