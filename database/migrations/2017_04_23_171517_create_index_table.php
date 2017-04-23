<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('index', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 60)->nullable();
			$table->integer('location_id')->nullable()->index('idx_location_id_1208_00');
			$table->integer('order')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('index');
	}

}
