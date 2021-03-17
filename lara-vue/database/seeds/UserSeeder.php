<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('123123123'),
        ]);

        $faker = Faker\Factory::create();

        foreach (range(1, 20) as $value) {
        	User::create([
        		'name' => $faker->name,
        		'email' => $faker->unique()->email,
        		'password' => bcrypt($faker->password),
        	]);
        }
    }
}
