<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MaterialsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Material::create(array(
				'id' => $index,
				'name' => 'Material #'.$index,
				'priceId' => $faker->numberBetween(0,100)
			));
		}
	}


}