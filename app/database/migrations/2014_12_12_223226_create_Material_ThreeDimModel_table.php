<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialThreeDimModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Material_Three_Dim_Model', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Material_id')->unsigned()->index();
			$table->foreign('Material_id')->references('id')->on('Materials')->onDelete('cascade');
			$table->integer('Three_Dim_Model_id')->unsigned()->index();
			$table->foreign('Three_Dim_Model_id')->references('id')->on('ThreeDimModels')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Material_Three_Dim_Model');
	}

}
