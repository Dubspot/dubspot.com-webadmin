<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_instances', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 512)->nullable();
			$table->text('description')->nullable();
			$table->integer('course_id');
			$table->integer('instructor_id');
			$table->integer('status')->default(1);
			$table->integer('location_id');
			$table->dateTime('course_start')->default('0000-00-00 00:00:00');
			$table->dateTime('course_end')->default('0000-00-00 00:00:00');
			$table->integer('seats_min')->nullable()->default(0);
			$table->integer('seats_max')->nullable()->default('0');
			$table->integer('category')->default(1);
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->smallInteger('is_full')->nullable();
			$table->string('identifier', 32)->nullable();
			$table->string('date_description', 64)->nullable();
			$table->integer('room_id')->nullable();
			$table->integer('class_type')->nullable();
			$table->string('duration_override', 32)->nullable();
			$table->integer('date_closeout_override')->default(0);
			$table->integer('closeout_days_override')->nullable();
			$table->string('orbund_class_name')->nullable();
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
		Schema::drop('course_instances');
	}

}
