<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('share', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('share_name', 100)->nullable();
			$table->string('symbol', 32)->nullable();
			$table->integer('index')->nullable()->index('idx_index_3049_01');
			$table->float('price_initiated', 10, 0)->nullable();
			$table->string('recommendation', 32)->nullable();
			$table->integer('order')->nullable();
			$table->integer('location_id')->nullable()->index('idx_location_id_3049_00');
			$table->string('performance')->nullable();
			$table->date('performdate')->nullable();
			$table->date('initiatedate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('share');
	}

}
