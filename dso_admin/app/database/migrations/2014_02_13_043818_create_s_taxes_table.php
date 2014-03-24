<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('s_taxes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('state')->nullable();
			$table->decimal('rate', 7, 4)->nullable();
			$table->decimal('multiplier', 5, 2)->default(1.00);
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
		Schema::drop('s_taxes');
	}

}
