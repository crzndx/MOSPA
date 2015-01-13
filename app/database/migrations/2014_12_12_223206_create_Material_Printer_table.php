<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialPrinterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Material_Printer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Material_id')->unsigned()->index();
			$table->foreign('Material_id')->references('id')->on('Materials')->onDelete('cascade');
			$table->integer('Printer_id')->unsigned()->index();
			$table->foreign('Printer_id')->references('id')->on('Printers')->onDelete('cascade');
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
		Schema::drop('Material_Printer');
	}

}
