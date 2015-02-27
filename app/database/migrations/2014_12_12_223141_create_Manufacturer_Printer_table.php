<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManufacturerPrinterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manufacturer_printer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('manufacturer_id')->unsigned()->index();
			$table->foreign('manufacturer_id')->references('id')->on('Manufacturers')->onDelete('cascade');
			$table->integer('printer_id')->unsigned()->index();
			$table->foreign('printer_id')->references('id')->on('Printers')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('manufacturer_printer');
	}

}
