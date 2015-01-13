<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MaterialThreeDimModelTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			MaterialThreeDimModel::create([
				'id' => $index,
				'Material_id' => $index,
				'Three_Dim_Model_id' => $index
			]);
		}
	}

}