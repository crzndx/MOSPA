<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material_price', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('material_id')->unsigned()->index();
			$table->foreign('material_id')->references('id')->on('Materials')->onDelete('cascade');
			$table->integer('price_id')->unsigned()->index();
			$table->foreign('price_id')->references('id')->on('Prices')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('material_price');
	}

}
