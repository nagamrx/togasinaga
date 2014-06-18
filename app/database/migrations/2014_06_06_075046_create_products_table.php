<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 45);
			$table->text('description');
			$table->decimal('rating');
			$table->integer('original_price');
			$table->integer('current_price');
			$table->integer('stock');
			$table->integer('num_view');
			$table->integer('num_review');
			$table->integer('num_order');
			$table->unsignedInteger('brand_id');
			$table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
			$table->index('brand_id');

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
		Schema::drop('products');
	}

}
