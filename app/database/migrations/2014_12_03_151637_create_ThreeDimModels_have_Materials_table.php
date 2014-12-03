<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreeDimModelsHaveMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ThreeDimModels_have_Materials', function(Blueprint $table)
		{
			$table->integer('threeDimModelId');
			$table->integer('materialId');
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
		Schema::drop('ThreeDimModels_have_Materials');
	}

}
