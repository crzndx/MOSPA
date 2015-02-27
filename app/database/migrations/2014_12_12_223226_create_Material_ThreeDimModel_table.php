<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialThreeDimModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material_three_dim_model', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('material_id')->unsigned()->index();
			$table->foreign('material_id')->references('id')->on('Materials')->onDelete('cascade');
			$table->integer('three_dim_model_id')->unsigned()->index();
			$table->foreign('three_dim_model_id')->references('id')->on('ThreeDimModels')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('material_three_dim_model');
	}

}
