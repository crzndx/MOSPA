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
		Schema::create('threedimmodels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name'); // maybe md5 of file?
			$table->float('volume');
			$table->float('weight')->nullable();
            $table->integer('infill');
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
		Schema::drop('threedimmodels');
	}

}
