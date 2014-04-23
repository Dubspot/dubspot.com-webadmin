@extends('layouts.scaffold')

@section('main')

<h1>Show Transaction</h1>

<p>{{ link_to_route('transactions.index', 'Return to all transactions') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Order_item_id</th>
			<th>Scheduled_payment_id</th>
			<th>Sales_rep</th>
			<th>Payment_status</th>
			<th>Note</th>
			<th>Adjustments_applied</th>
			<th>Adjustment_amount</th>
			<th>Payment Method</th>
			<th>Payment_review</th>
			<th>Amount_paid</th>
			<th>Balance</th>
			<th>Payment_1_notes</th>
			<th>Payment_2_method</th>
			<th>Payment_2_notes</th>
			<th>Payment_3_method</th>
			<th>Payment_3_notes</th>
			<th>Payment_4_method</th>
			<th>Payment_4_notes</th>
			<th>Payment_notes</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $transaction->order_item_id }}}</td>
			<td>{{{ $transaction->scheduled_payment_id }}}</td>
			<td>{{{ $transaction->sales_rep }}}</td>
			<td>{{{ $transaction->payment_status }}}</td>
			<td>{{{ $transaction->note }}}</td>
			<td>{{{ $transaction->adjustments_applied }}}</td>
			<td>{{{ $transaction->adjustment_amount }}}</td>
			<td>{{{ $transaction->payment_method }}}</td>
			<td>{{{ $transaction->payment_review }}}</td>
			<td>{{{ $transaction->amount_paid }}}</td>
			<td>{{{ $transaction->balance }}}</td>
			<td>{{{ $transaction->payment_1_notes }}}</td>
			<td>{{{ $transaction->payment_2_method }}}</td>
			<td>{{{ $transaction->payment_2_notes }}}</td>
			<td>{{{ $transaction->payment_3_method }}}</td>
			<td>{{{ $transaction->payment_3_notes }}}</td>
			<td>{{{ $transaction->payment_4_method }}}</td>
			<td>{{{ $transaction->payment_4_notes }}}</td>
			<td>{{{ $transaction->payment_notes }}}</td>
      <td>{{ link_to_route('transactions.edit', 'Edit', array($transaction->id), array('class' => 'btn btn-info')) }}</td>
      <td>
	      {{ Form::open(array('method' => 'DELETE', 'route' => array('transactions.destroy', $transaction->id))) }}
	        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
	      {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
