<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('pack_name')->nullable();
			$table->float('amount', 10, 0)->nullable();
			$table->string('status')->nullable();
			$table->string('TxMsg')->nullable();
			$table->string('transaction_id')->nullable()->unique('transaction_id');
			$table->string('ref_no')->nullable()->unique('ref_no');
			$table->string('mode')->nullable();
			$table->string('response')->nullable();
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
		Schema::drop('payments');
	}

}
