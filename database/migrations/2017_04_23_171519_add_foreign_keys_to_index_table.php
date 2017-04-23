<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIndexTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('index', function(Blueprint $table)
		{
			$table->foreign('location_id', 'fk_locations_1205_00')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('index', function(Blueprint $table)
		{
			$table->dropForeign('fk_locations_1205_00');
		});
	}

}
