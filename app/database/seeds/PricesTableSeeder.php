<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PricesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Price::create(array(
				'id' => $index,
				'currency' => $faker->randomElement(array('EUR','USD','YEN','GBP')),
				'price' => $faker->randomFloat()
			));
		}
	}

}