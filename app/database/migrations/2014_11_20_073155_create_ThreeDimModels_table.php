<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThreeDimModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ThreeDimModels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name'); // maybe md5 of file?
			$table->float('x');
			$table->float('y');
			$table->float('z');
			$table->float('volume');
			$table->float('weight')->nullable();
            $table->string('data');
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
		Schema::drop('ThreeDimModels');
	}

}
