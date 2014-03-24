@extends('layouts.scaffold')

@section('main')

<h1>All Invoices</h1>

<p>{{ link_to_route('invoices.create', 'Add new invoice') }}</p>

@if ($invoices->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>First_name</th>
				<th>Last_name</th>
				<th>Demo</th>
				<th>User_id</th>
				<th>Shipping_address_id</th>
				<th>Billing_address_id</th>
				<th>Status</th>
				<th>Tax_total</th>
				<th>Order_total</th>
				<th>Manually_created</th>
				<th>Comments</th>
				<th>Alternate_order_id</th>
				<th>Is_deleted</th>
				<th>Discounted</th>
				<th>Discount_amount</th>
				<th>I_tax_total</th>
				<th>S_tax_total</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($invoices as $invoice)
			<tr>
				<td>{{{ $invoice->first_name }}}</td>
				<td>{{{ $invoice->last_name }}}</td>
				<td>{{{ $invoice->demo }}}</td>
				<td>{{{ $invoice->user_id }}}</td>
				<td>{{{ $invoice->shipping_address_id }}}</td>
				<td>{{{ $invoice->billing_address_id }}}</td>
				<td>{{{ $invoice->status }}}</td>
				<td>{{{ $invoice->tax_total }}}</td>
				<td>{{{ $invoice->order_total }}}</td>
				<td>{{{ $invoice->manually_created }}}</td>
				<td>{{{ $invoice->comments }}}</td>
				<td>{{{ $invoice->alternate_order_id }}}</td>
				<td>{{{ $invoice->is_deleted }}}</td>
				<td>{{{ $invoice->discounted }}}</td>
				<td>{{{ $invoice->discount_amount }}}</td>
				<td>{{{ $invoice->i_tax_total }}}</td>
				<td>{{{ $invoice->s_tax_total }}}</td>
				<td>{{ link_to_route('invoices.show', 'Show', array($invoice->id), array('class' => 'btn btn-info')) }}</td>
				<td>{{ link_to_route('invoices.edit', 'Edit', array($invoice->id), array('class' => 'btn btn-info')) }}</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'route' => array('invoices.destroy', $invoice->id))) }}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $invoices->links() }}

@else
	There are no invoices
@endif

@stop
