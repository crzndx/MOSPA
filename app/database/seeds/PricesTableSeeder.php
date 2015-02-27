<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PricesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$rand = rand(50,200);
		foreach(range(1, $rand) as $index)
		{
			Price::create(array(
				'id' => $index,
				'currency' => '€',
				'price' => $faker->randomFloat()
			));
		}
	}

}