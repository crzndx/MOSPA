<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ManufacturersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$rand = rand(1,100);
		foreach(range(1, $rand) as $index)
		{
			Manufacturer::create(array(
				'id' => $index,
				'name' => $faker->company,
				'url' => $faker->url
			));
		}
	}

}