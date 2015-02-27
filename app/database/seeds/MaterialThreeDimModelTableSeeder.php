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
				'material_id' => $index,
				'three_dim_model_id' => $index
			]);
		}
	}

}