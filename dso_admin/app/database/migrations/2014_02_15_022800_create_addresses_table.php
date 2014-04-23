<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('address1', 128)->nullable();
			$table->string('address2', 64)->nullable();
			$table->string('city', 64)->nullable();
			$table->string('province', 64)->nullable();
			$table->string('postcode', 16)->nullable();
			$table->string('country', 2)->nullable();
			$table->string('phone', 16)->nullable();
			$table->integer('address_type')->default(1);
			$table->integer('user_id')->nullable();
			$table->string('firstname', 32)->nullable();
			$table->string('lastname', 32) ->nullable();
			$table->string('mobile_phone', 16)->nullable();
			$table->string('email', 128)->nullable();
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
		Schema::drop('addresses');
	}

}
