<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasketItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('basket_items', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('quantity')->nullable()->default(1);
			$table->integer('product_id')->nullable();
			$table->integer('invoice_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('session_hash', 32)->nullable();
			$table->integer('instance_id')->nullable();
			$table->smallInteger('installment_selected')->nullable()->default(0);
			$table->string('instance_ids', 128)->nullable();
			$table->decimal('price', 9, 2)->nullable();
			$table->smallInteger('is_deleted')->default(0);
			$table->decimal('i_tax', 9, 2)->nullable();
			$table->decimal('s_tax', 9, 2)->nullable();
			$table->string('title', 128)->nullable();
			$table->string('description', 128)->nullable();
			$table->string('orbund_classname', 64)->nullable();
			$table->string('orbund_class_id', 64)->nullable();
			$table->string('location', 64)->nullable();
			$table->string('date_description', 64)->nullable();
			$table->dateTime('start_date')->nullable()->default('0000-00-00 00:00:00');
			$table->dateTime('end_date')->nullable()->default('0000-00-00 00:00:00');
			$table->decimal('orbund_price', 9, 2)->nullable();
			$table->decimal('orbund_online_price', 9, 2)->nullable();
			$table->string('orbund_class_group_id', 64)->nullable();
			$table->string('orbund_class_group_name', 64)->nullable();
			$table->string('orbund_program_code', 64)->nullable();
			$table->string('orbund_class_group_ids', 512)->nullable();
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
		Schema::drop('basket_items');
	}

}
