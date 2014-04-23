@extends('layouts/default')

@section('main')
	<h2>Custom Actions</h2>

	<h2>Scaffolds</h2>
	<ul>
		<li>{{ link_to_route('addresses.index',   					'Addresses') }}</li>
		<li>{{ link_to_route('authorize_responses.index',   'Authorize Responses') }}</li>
		<li>{{ link_to_route('basket_items.index',          'Basket Items') }}</li>
		<li>{{ link_to_route('categories.index',            'Categories') }}</li>
		<li>{{ link_to_route('course_instance_dates.index', 'Course Instance Dates') }}</li>
		<li>{{ link_to_route('course_instances.index',      'Course Instances') }}</li>
		<li>{{ link_to_route('courses.index',               'Courses') }}</li>
		<li>{{ link_to_route('i_taxes.index',               'I Taxes') }}</li>
		<li>{{ link_to_route('invoices.index',              'Invoices') }}</li>
		<li>{{ link_to_route('locations.index',             'Locations') }}</li>
		<li>{{ link_to_route('order_items.index',           'Order Items') }}</li>
		<li>{{ link_to_route('orders.index',                'Orders') }}</li>
		<li>{{ link_to_route('payments.index',              'Payments') }}</li>
		<li>{{ link_to_route('product_types.index',         'Product Types') }}</li>
		<li>{{ link_to_route('products.index',              'Products') }}</li>
		<li>{{ link_to_route('programs.index',              'Programs') }}</li>
		<li>{{ link_to_route('program_instances.index',     'Program Instances') }}</li>
		<li>{{ link_to_route('promotions.index',            'Promotions') }}</li>
		<li>{{ link_to_route('promotions_issued.index',     'Promotions Issued') }}</li>
		<li>{{ link_to_route('rooms.index',                 'Rooms') }}</li>
		<li>{{ link_to_route('s_taxes.index',               'S Taxes') }}</li>
		<li>{{ link_to_route('scheduled_payments.index',    'Scheduled Payments') }}</li>
		<li>{{ link_to_route('transactions.index',   				'Transactions') }}</li>
		<li>{{ link_to_route('uber_programs.index',         'Uber Programs') }}</li>
		<li>{{ link_to_route('users.index',                 'Users') }}</li>
	</ul>



@stop