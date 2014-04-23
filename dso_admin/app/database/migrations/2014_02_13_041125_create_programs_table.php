<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 512)->nullable();
			$table->text('description')->nullable();
			$table->integer('status')->default(1);
			$table->smallInteger('is_active')->default(0);
			$table->smallInteger('is_deleted')->default(0);
			$table->integer('location_id')->nullable();
			$table->string('child_program_ids', 128)->nullable()->default('{}');
			$table->integer('wp_post_id')->nullable();
			$table->string('orbund_course_group_id', 64)->nullable();
			$table->string('orbund_course_group_name', 64)->nullable();
			$table->string('orbund_program_code', 64)->nullable();
			$table->string('title_short', 128)->nullable();
			$table->string('url_register', 256)->nullable();
			$table->smallInteger('show_past_nyc')->nullable()->default(0);
			$table->smallInteger('show_past_dso')->nullable()->default(0);
			$table->string('url_program', 256)->nullable();
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
		Schema::drop('programs');
	}

}
