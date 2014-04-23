<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', array('as'=>'home', function()
// {
// 	return View::make('index');
// }));

Route::get('/', 'UsersController@index');

Route::resource('addresses', 'AddressesController');

Route::resource('authorize_responses', 'Authorize_responsesController');

Route::resource('basket_items', 'Basket_itemsController');

Route::resource('categories', 'CategoriesController');

Route::resource('course_instance_dates', 'Course_instance_datesController');

Route::resource('course_instances', 'Course_instancesController');

Route::resource('courses', 'CoursesController');

Route::resource('i_taxes', 'I_taxesController');

Route::resource('invoices', 'InvoicesController');

Route::resource('locations', 'LocationsController');

Route::resource('order_items', 'Order_itemsController');
// Route::get('transactions', array('uses'=>'Order_itemsController@transactions', 'as'=>'transactions'));

Route::resource('orders', 'OrdersController');

Route::resource('payments', 'PaymentsController');

Route::resource('product_types', 'Product_typesController');

Route::resource('products', 'ProductsController');

Route::resource('program_instances', 'Program_instancesController');

Route::resource('programs', 'ProgramsController');

Route::resource('promotions', 'PromotionsController');

Route::resource('promotions_issued', 'Promotions_issuedController');

Route::resource('rooms', 'RoomsController');

Route::resource('s_taxes', 'S_taxesController');

Route::resource('scheduled_payments', 'Scheduled_paymentsController');

Route::resource('transactions', 'TransactionsController');
Route::get('master', array('uses'=>'TransactionsController@master', 'as'=>'master'));


Route::resource('uber_programs', 'Uber_programsController');

Route::resource('users', 'UsersController');
Route::get('search', array('uses'=>'UsersController@search', 'as'=>'search'));

Route::get('user/upgrade/{id}', 'UsersController@upgrade');



