<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_item_id');
			$table->integer('scheduled_payment_id');
			$table->string('sales_rep', 255);
			$table->string('payment_status', 255);
			$table->text('note');
			$table->decimal('adjustments_applied', 5, 2);
			$table->decimal('adjustment_amount', 19, 4);
			$table->string('payment_method', 255)->default('AUTH (DUBSPOT.COM)');
			$table->integer('payment_review')->default(0);
			$table->decimal('amount_paid', 19, 4);
			$table->decimal('balance', 19, 4);
			$table->text('payment_1_notes');
			$table->string('payment_2_method', 255);
			$table->text('payment_2_notes');
			$table->string('payment_3_method', 255);
 			$table->text('payment_3_notes');
 			$table->string('payment_4_method', 255);
 			$table->text('payment_4_notes');
 			$table->text('payment_notes');
			$table->timestamps();


			$table->foreign('order_item_id')->references('id')->on('ecommerce_order_items')->unsigned();
			$table->foreign('scheduled_payment_id')->references('id')->on('ecommerce_scheduled_payments')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
