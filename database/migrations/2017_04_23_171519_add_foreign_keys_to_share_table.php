<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('share', function(Blueprint $table)
		{
			$table->foreign('index', 'fk_index_3042_01')->references('id')->on('index')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('location_id', 'fk_locations_3041_00')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('share', function(Blueprint $table)
		{
			$table->dropForeign('fk_index_3042_01');
			$table->dropForeign('fk_locations_3041_00');
		});
	}

}
