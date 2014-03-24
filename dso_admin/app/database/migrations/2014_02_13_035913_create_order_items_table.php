<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_items', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id');
			$table->integer('quantity')->default(1);
			$table->integer('product_id');
			$table->string('title', 128)->nullable();
			$table->string('description', 128)->nullable();
			$table->decimal('price', 9, 2)->nullable();
			$table->integer('user_id')->nullable();
			$table->smallInteger('is_deleted')->default(0);
			$table->decimal('i_tax', 9, 2)->nullable();
			$table->decimal('s_tax', 9, 2)->nullable();
			$table->integer('instance_id')->nullable();
			$table->smallInteger('installment_selected')->nullable()->default(0);
			$table->string('instance_ids', 128)->nullable();
			$table->string('orbund_classname', 64)->nullable();
			$table->string('orbund_class_id', 64)->nullable();
			$table->string('location', 64)->nullable();
			$table->string('date_description', 64)->nullable();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
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
		Schema::drop('order_items');
	}

}
