<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PrintersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$rand = rand(1,100);
		foreach(range(1, $rand) as $index)
		{
			Printer::create(array(
				'id' => $index,
				'name' => 'Printer #'.$index
			));
		}
	}

}