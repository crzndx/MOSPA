<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ThreeDimModelsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			ThreeDimModel::create(array(
				'id' => $index,
				'name' => 'Model #'.$index,
				'materialId' => $faker->numberBetween(0,100),
				'printerId' => $faker->numberBetween(0,100),
				'x' => $faker->randomFloat(),
				'y' => $faker->randomFloat(),
				'z' => $faker->randomFloat(),
				'volume' => $faker->randomFloat(),
				'weight' => $faker->randomFloat()
			));
		}
	}

}