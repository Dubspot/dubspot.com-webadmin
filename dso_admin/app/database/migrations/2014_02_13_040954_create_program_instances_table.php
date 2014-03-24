<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('program_instances', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('program_id');
			$table->string('title', 512)->nullable();
			$table->text('description')->nullable();
			$table->integer('status')->default(1);
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->smallInteger('is_full');
			$table->integer('location_id')->nullable();
			$table->string('identifier', 32)->nullable();
			$table->string('date_description', 64)->nullable();
			$table->integer('class_type')->nullable();
			$table->string('duration_override', 32)->nullable();
			$table->integer('date_closeout_override')->default(0);
			$table->integer('closeout_days_override')->nullable();
			$table->string('orbund_programmeCode', 32)->nullable();
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
		Schema::drop('program_instances');
	}

}
