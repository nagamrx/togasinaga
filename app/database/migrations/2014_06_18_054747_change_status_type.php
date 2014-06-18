<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeStatusType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE orders MODIFY payment_method INT");
		DB::statement("ALTER TABLE promotions MODIFY status INT");
		DB::statement("ALTER TABLE product_supplies MODIFY status INT");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("ALTER TABLE orders MODIFY payment_method VARCHAR(20)");
		DB::statement("ALTER TABLE promotions MODIFY status VARCHAR(20)");
		DB::statement("ALTER TABLE product_supplies MODIFY status VARCHAR(20)");
	}

}
