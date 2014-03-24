<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->decimal('price', 9, 2)->nullable();
			$table->integer('product_type_id');
			$table->integer('product_object_id');
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->integer('installments')->nullable()->default(1);
			$table->decimal('installment_markup', 9, 6)->nullable()->default(0.000000);
			$table->decimal('online_discount', 9, 6)->nullable()->default(0.000000);
			$table->integer('wp_post_id')->nullable();
			$table->decimal('online_price', 9, 2)->nullable();
			$table->integer('show_online_price')->default(0);
			$table->smallInteger('show_online_price_only')->default(0);
			$table->decimal('payment_plan_price', 9, 2)->nullable();
			$table->decimal('online_payment_plan_price', 9, 2)->nullable();
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
		Schema::drop('products');
	}

}
