<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Materials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->primary('id');
			$table->string('name');
			$table->integer('priceId');
			$table->foreign('priceId')->references('id')->on('Prices')->onDelete('cascade');
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
		Schema::drop('Materials');
	}

}
