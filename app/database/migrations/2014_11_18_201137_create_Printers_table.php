<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrintersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Printers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->primary('id');
			$table->string('name');
			$table->integer('materialId');
			$table->foreign('materialId')->references('id')->on('Materials')->onDelete('cascade');
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
		Schema::drop('Printers');
	}

}
