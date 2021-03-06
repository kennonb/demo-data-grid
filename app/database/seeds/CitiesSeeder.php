<?php

use Faker\Factory as Faker;

class CitiesSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		DB::table('cities')->truncate();

		foreach (range(1, 100000) as $index)
		{
			$int = rand(strtotime("- 1 year"), time());

			DB::table('cities')->insert([
				'country'                  => $faker->country,
				'subdivision'              => $faker->state,
				'city'                     => $faker->city,
				'population'               => $faker->randomNumber(5),
				'country_code'             => $faker->countryCode,
				'country_subdivision_code' => $faker->stateAbbr,
				'created_at'               => date("Y-m-d H:i:s", $int),
			]);
		}
	}

}
