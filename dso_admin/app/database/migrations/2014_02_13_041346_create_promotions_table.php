<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 128)->nullable();
			$table->text('description')->nullable();
			$table->decimal('discount', 5, 2)->nullable();
			$table->integer('max_issues')->nullable()->default(0);
			$table->integer('max_issues_per_user')->nullable()->default(0);
			$table->dateTime('start_date')->default('0000-00-00 00:00:00');
			$table->dateTime('end_date')->default('0000-00-00 00:00:00');
			$table->string('promotion_code', 128)->nullable();
			$table->string('locations', 512)->nullable();
			$table->integer('discount_type')->nullable()->default(1);
			$table->dateTime('last_updated')->nullable();
			$table->string('combinable', 3)->nullable()->default('no');
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
		Schema::drop('promotions');
	}

}
