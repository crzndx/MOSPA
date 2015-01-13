<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ManufacturersTableSeeder');
		$this->call('MaterialsTableSeeder');
		$this->call('PricesTableSeeder');
		$this->call('PrintersTableSeeder');
		$this->call('ThreeDimModelsTableSeeder');

		// relations
		$this->call('ManufacturerPrinterTableSeeder');
		$this->call('MaterialPriceTableSeeder');
		$this->call('MaterialPrinterTableSeeder');
		$this->call('MaterialThreeDimModelTableSeeder');
		$this->call('PriceThreeDimModelTableSeeder');

		}

}
