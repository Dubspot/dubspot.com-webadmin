<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUberProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uber_programs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 512)->nullable();
			$table->text('description')->nullable();
			$table->integer('status')->default(1);
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->integer('wp_post_id')->nullable();
			$table->string('orbund_program_code', 64)->nullable();
			$table->text('custom_location')->nullable();
			$table->text('custom_location_link')->nullable();
			$table->smallInteger('location_id')->nullable();
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
		Schema::drop('uber_programs');
	}

}
