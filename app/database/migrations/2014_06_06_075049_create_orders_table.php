<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('status', 10)->index();
			$table->datetime('order_date')->index();
			$table->datetime('payment_date')->index();
			$table->boolean('payment_confirmed');
			$table->string('payment_method', 20);
			$table->decimal('totalprice');
			$table->unsignedInteger('user_id')->nullable();
			$table->unsignedInteger('courier_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
			$table->foreign('courier_id')->references('id')->on('couriers')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
		Schema::drop('orders');
	}

}
