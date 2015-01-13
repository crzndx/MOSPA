<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ThreeDimModelsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$rand = rand(1,100);
		foreach(range(1, $rand) as $index)
		{
			ThreeDimModel::create(array(
				'id' => $index,
				'name' => 'Model #'.$index,
				'x' => $faker->randomFloat(),
				'y' => $faker->randomFloat(),
				'z' => $faker->randomFloat(),
				'volume' => $faker->randomFloat(),
				'weight' => $faker->randomFloat()
			));
		}
	}

}