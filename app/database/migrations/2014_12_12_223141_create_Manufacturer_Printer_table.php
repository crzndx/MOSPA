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
		Schema::create('Manufacturer_Printer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Manufacturer_id')->unsigned()->index();
			$table->foreign('Manufacturer_id')->references('id')->on('Manufacturers')->onDelete('cascade');
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
		Schema::drop('Manufacturer_Printer');
	}

}
