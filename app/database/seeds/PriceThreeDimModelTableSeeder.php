<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PriceThreeDimModelTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			PriceThreeDimModel::create([
				'id' => $index,
				'price_id' => $index,
				'three_dim_model_id' => $index
			]);
		}
	}

}