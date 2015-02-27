<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceThreeDimModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('price_three_dim_model', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('price_id')->unsigned()->index();
			$table->foreign('price_id')->references('id')->on('Prices')->onDelete('cascade');
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
		Schema::drop('price_three_dim_model');
	}

}
