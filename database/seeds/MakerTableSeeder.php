<?php

use Illuminate\Database\Seeder;

use App\Maker; 
use Faker\Factory as Faker; // use faker

class MakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   	DB::table('makers')->truncate();
		$faker = Faker::create();

		for($i = 0; $i < 6; $i++)
		{
			Maker::create
			([
				'name' => $faker->word(),
				'phone' => $faker->randomDigit(5)
			]);
		}
    }
}
