<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndexPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('index_price', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('pack_name')->nullable()->unique('pack_name');
			$table->integer('index_id')->nullable()->index('fk-index_id');
			$table->float('price', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('index_price');
	}

}
