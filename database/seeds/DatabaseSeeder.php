<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	
        $this->call(MakerTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
