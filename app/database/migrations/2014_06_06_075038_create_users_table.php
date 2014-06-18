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
			$table->string('username', 45);
			$table->string('password', 80);
			$table->string('remember_token', 100)->nullable();
			$table->string('picture', 45)->nullable();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->date('birthdate');
			$table->string('address_street', 45);
			$table->string('address_city', 45);
			$table->string('address_province', 45);
			$table->string('address_country', 45);
			$table->integer('role');
			$table->integer('newsletter');
			$table->string('email', 45);
			$table->string('phone_number', 15);
			$table->datetime('registration_date');
			$table->datetime('last_visit')->nullable();
			$table->boolean('is_active');

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
