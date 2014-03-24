<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseInstanceDatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_instance_dates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('course_instance_id');
			$table->integer('instructor_id');
			$table->integer('location_id');
			$table->dateTime('course_date_start')->default('0000-00-00 00:00:00');
			$table->dateTime('course_date_end')->default('0000-00-00 00:00:00');
			$table->smallInteger('is_deleted')->nullable()->default(0);
			$table->integer('room_id')->nullable();
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
		Schema::drop('course_instance_dates');
	}

}
