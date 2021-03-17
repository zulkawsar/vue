<?php

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        foreach (range(1, 30) as $index) {
            $name = $faker->unique()->name;
        	Category::create([
        		'name' => $name,
                'slug' => Str::slug($name.' ' .rand(1,9999))
        	]);
        }
    }
}
