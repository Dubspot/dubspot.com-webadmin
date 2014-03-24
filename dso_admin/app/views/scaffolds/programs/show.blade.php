@extends('layouts.scaffold')

@section('main')

<h1>Show Program</h1>

<p>{{ link_to_route('programs.index', 'Return to all programs') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Status</th>
			<th>Is_active</th>
			<th>Is_deleted</th>
			<th>Location_id</th>
			<th>Child_program_ids</th>
			<th>Wp_post_id</th>
			<th>Orbund_course_group_id</th>
			<th>Orbund_course_group_name</th>
			<th>Orbund_program_code</th>
			<th>Title_short</th>
			<th>Url_register</th>
			<th>Show_past_nyc</th>
			<th>Show_past_dso</th>
			<th>Url_program</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $program->title }}}</td>
			<td>{{{ $program->description }}}</td>
			<td>{{{ $program->status }}}</td>
			<td>{{{ $program->is_active }}}</td>
			<td>{{{ $program->is_deleted }}}</td>
			<td>{{{ $program->location_id }}}</td>
			<td>{{{ $program->child_program_ids }}}</td>
			<td>{{{ $program->wp_post_id }}}</td>
			<td>{{{ $program->orbund_course_group_id }}}</td>
			<td>{{{ $program->orbund_course_group_name }}}</td>
			<td>{{{ $program->orbund_program_code }}}</td>
			<td>{{{ $program->title_short }}}</td>
			<td>{{{ $program->url_register }}}</td>
			<td>{{{ $program->show_past_nyc }}}</td>
			<td>{{{ $program->show_past_dso }}}</td>
			<td>{{{ $program->url_program }}}</td>
      <td>{{ link_to_route('programs.edit', 'Edit', array($program->id), array('class' => 'btn btn-info')) }}</td>
      <td>
        {{ Form::open(array('method' => 'DELETE', 'route' => array('programs.destroy', $program->id))) }}
          {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
