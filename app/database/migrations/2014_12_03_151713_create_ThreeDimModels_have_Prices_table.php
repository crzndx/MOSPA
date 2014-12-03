<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreeDimModelsHavePricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ThreeDimModels_have_Prices', function(Blueprint $table)
		{
			$table->integer('threeDimModelId');
			$table->integer('priceId');
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
		Schema::drop('ThreeDimModels_have_Prices');
	}

}
