<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ManufacturersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Manufacturer::create(array(
				'id' => $index,
				'name' => $faker->company,
				'url' => $faker->url,
				'printerId' => $faker->numberBetween(0,100)
			));
		}
	}

}