<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create3DModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('3DModels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name'); // maybe md5 of file?
			$table->integer('materialId')->nullable();
			$table->integer('printerId')->nullable();
			$table->float('x');
			$table->float('y');
			$table->float('z');
			$table->float('volume');
			$table->float('weight')->nullable();
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
		Schema::drop('3DModels');
	}

}
