<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   	User::truncate();

		User::create
		([
			'email' => 'fake@fake.com',
			'password' => Hash::make('pass')
		]);
    }
}