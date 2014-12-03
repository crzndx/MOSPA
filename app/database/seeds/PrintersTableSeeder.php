<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PrintersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Printer::create(array(
				'id' => $index,
				'name' => 'Printer #'.$index,
				'materialId' => $faker->randomNumber(0,100)
			));
		}
	}

}