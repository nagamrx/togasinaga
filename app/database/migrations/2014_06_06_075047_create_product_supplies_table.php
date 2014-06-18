<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSuppliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_supplies', function(Blueprint $table) {
			$table->increments('id');
			$table->datetime('date');
			$table->integer('quantity');
			$table->decimal('cost');
			$table->string('status', 10);
			$table->unsignedInteger('product_id')->nullable();
			$table->unsignedInteger('supplier_id')->nullable();
			$table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('supplier_id')->references('id')->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
			$table->index('product_id');
			$table->index('supplier_id');

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
		Schema::drop('product_supplies');
	}

}
