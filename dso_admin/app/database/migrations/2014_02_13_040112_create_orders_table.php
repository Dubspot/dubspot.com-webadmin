<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name', 32)->nullable();
			$table->string('last_name', 32)->nullable();
			$table->smallInteger('demo')->nullable()->deafult(0);
			$table->integer('user_id')->nullable();
			$table->integer('shipping_address_id')->nullable();
			$table->integer('billing_address_id')->nullable();
			$table->integer('status')->nullable()->deafult(0);
			$table->decimal('tax_total', 9, 2)->nullable();
			$table->decimal('order_total', 9, 2)->nullable();
			$table->smallInteger('manually_created')->nullable()->deafult(0);
			$table->text('comments')->nullable();
			$table->integer('alternate_order_id')->nullable();
			$table->smallInteger('is_deleted')->deafult(0);
			$table->smallInteger('discounted')->nullable()->deafult(0);
			$table->decimal('discount_amount', 6, 2)->nullable();
			$table->decimal('i_tax_total', 9, 2)->nullable();
			$table->decimal('s_tax_total', 9, 2)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
