<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndexPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('index_price', function(Blueprint $table)
		{
			$table->foreign('index_id', 'fk-index_id')->references('id')->on('index')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('index_price', function(Blueprint $table)
		{
			$table->dropForeign('fk-index_id');
		});
	}

}
