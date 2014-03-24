<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 16)->nullable();
			$table->string('facebook_user_id', 128)->nullable();
			$table->string('facebook_session_key', 160)->nullable();
			$table->string('firstname', 32)->nullable();
			$table->string('lastname', 32)->nullable();
			$table->string('email', 128)->nullable();
			$table->integer('address_id')->nullable();
			$table->integer('profile_image_id')->nullable();
			$table->string('role', 16)->default('guest');
			$table->smallInteger('suspended')->nullable()->default(0);
			$table->text('found_how')->nullable();
			$table->string('password_hash', 32)->nullable();
			$table->string('reset_hash', 8);
			$table->string('activation_hash', 8);
			$table->integer('activation_attempts')->default(1);
			$table->timestamp('activated')->default('0000-00-00 00:00:00');
			$table->smallInteger('is_deleted')->nullable()->default(0);
			$table->smallInteger('send_updates')->nullable()->default(0);
			$table->integer('wp_user_id')->nullable();
			$table->text('biography')->nullable();
			$table->text('influences')->nullable();
			$table->text('interests')->nullable();
			$table->integer('moodle_user_id')->nullable();
			$table->date('birthday')->nullable();
			$table->string('contact_email', 128)->nullable();
			$table->string('origin_country', 128)->nullable();
			$table->string('stage_name', 64)->nullable();
			$table->string('birthday_display_style', 16)->nullable();
			$table->string('location', 64)->nullable();
			$table->integer('orbund_id')->nullable();
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
		Schema::drop('users');
	}

}
