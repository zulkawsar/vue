<?php

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 100) as $value) {
            $name = $faker->unique()->name;
        	Post::create([
        		'user_id' => rand(1,20),
        		'category_id' => rand(1,30),
        		'name' => $name,
                'slug' => Str::slug($name.' ' .rand(1,9999)),
        		'content' => $faker->paragraph,
        		'status' => $this->returnStatus(),
        	]);
        }
    }

    public function returnStatus()
    {
        $str = array('draft', 'published');

        return $str[array_rand($str)];
    }
}
