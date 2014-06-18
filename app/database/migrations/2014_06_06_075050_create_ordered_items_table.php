<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderedItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordered_items', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('quantity');
			$table->integer('subtotal_price');
			$table->unsignedInteger('order_id')->nullable();
			$table->unsignedInteger('product_id')->nullable();
			$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade')->nullable();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
		Schema::drop('ordered_items');
	}

}
