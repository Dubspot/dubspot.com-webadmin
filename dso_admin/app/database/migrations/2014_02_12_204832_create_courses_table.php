<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 512)->nullable();
			$table->text('description')->nullable();
			$table->integer('instructor_id');
			$table->integer('status')->default(1);
			$table->integer('location_id');
			$table->integer('seats_min')->nullable()->default(0);
			$table->integer('seats_max')->nullable()->default(0);
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->integer('wp_post_id')->nullable();
			$table->string('orbund_course_number', 45)->nullable();
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
		Schema::drop('courses');
	}

}
