<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufacturersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Manufacturers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url')->nullable();
			$table->integer('printerId');
			$table->foreign('printerId')->references('id')->on('Printers')->onDelete('cascade');
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
		Schema::drop('Manufacturers');
	}

}
