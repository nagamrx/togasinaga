<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouriersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('couriers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('company_name', 255)->index();
			$table->string('contact_person', 255);
			$table->string('email', 45);
			$table->string('phone_number', 20);
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
		Schema::drop('couriers');
	}

}
