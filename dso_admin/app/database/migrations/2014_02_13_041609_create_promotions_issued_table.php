<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsIssuedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotions_issued', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->integer('promotion_id');
			$table->string('promotion_code', 128)->nullable();
			$table->decimal('discount_amount', 6, 2)->nullable();
			$table->string('session_hash', 32)->nullable();
			$table->integer('order_id')->nullable();
			$table->integer('basket_item_id')->nullable();
			$table->integer('line_item_id')->nullable();
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
		Schema::drop('promotions_issued');
	}

}
