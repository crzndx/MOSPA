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
		Schema::create('Price_Three_Dim_Model', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Price_id')->unsigned()->index();
			$table->foreign('Price_id')->references('id')->on('Prices')->onDelete('cascade');
			$table->integer('Three_Dim_Model_id')->unsigned()->index();
			$table->foreign('Three_Dim_Model_id')->references('id')->on('ThreeDimModels')->onDelete('cascade');
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
		Schema::drop('Price_Three_Dim_Model');
	}

}
