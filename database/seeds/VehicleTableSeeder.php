<?php

use Illuminate\Database\Seeder;

use App\Vehicle; 
use Faker\Factory as Faker; // use faker

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('vehicles')->truncate();
		$faker = Faker::create();

		for($i = 0; $i < 30; $i++)
		{
			Vehicle::create
			([
				'color' => $faker->safeColorName(),
				'power' => $faker->randomNumber(),
				'capacity' => $faker->randomFloat(),
				'speed' => $faker->randomFloat(),
				'maker_id' => $faker->numberBetween(1,5)
			]);
		}
    }
}
