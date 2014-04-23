<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id');
			$table->integer('order_item_id')->nullable();
			$table->integer('user_id');
			$table->integer('payment_type')->nullable()->default(1);
			$table->integer('scheduled_payment_id')->nullable();
			$table->dateTime('payment_date')->default('0000-00-00 00:00:00');
			$table->string('card_name', 32)->nullable();
			$table->string('card_type', 24)->nullable();
			$table->string('card_suffix', 4)->nullable();
			$table->date('card_expiry')->nullable();
			$table->string('status', 8)->nullable();
			$table->string('authcode', 16)->nullable();
			$table->string('transid', 16)->nullable();
			$table->string('avs')->nullable();
			$table->decimal('amount', 9, 2)->nullable();
			$table->smallInteger('preauth')->default(0);
			$table->integer('address_id')->nullable();
			$table->string('decline_type', 256)->nullable();
			$table->string('cvv', 8)->nullable();
			$table->string('offenders', 256)->nullable();
			$table->text('raw_response')->nullable();
			$table->string('action', 32)->nullable();
			$table->string('checkno', 32)->nullable();
			$table->smallInteger('is_deleted')->nullable()->default(0);
			$table->string('recurring_result_code', 45)->nullable();
			$table->string('recurring_message_code', 45)->nullable();
			$table->string('recurring_message_text', 45)->nullable();
			$table->integer('recurring_subscription_id')->nullable();
			$table->integer('routing_number')->nullable();
			$table->integer('bank_account_suffix')->nullable();
			$table->text('notes')->nullable();
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
		Schema::drop('payments');
	}

}
