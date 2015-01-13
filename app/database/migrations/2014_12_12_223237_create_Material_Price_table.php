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
		Schema::create('Material_Price', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Material_id')->unsigned()->index();
			$table->foreign('Material_id')->references('id')->on('Materials')->onDelete('cascade');
			$table->integer('Price_id')->unsigned()->index();
			$table->foreign('Price_id')->references('id')->on('Prices')->onDelete('cascade');
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
		Schema::drop('Material_Price');
	}

}
