<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $array = [
                'name' => $faker->word,
                'meta_keywords' => $faker->name,
                'meta_des' => $faker->name,
                'des' => $faker->paragraph,
                'youtube' => 'https://www.youtube.com/watch?v=bScEZeJL2eM',
                'published' => rand(0, 1),
                'user_id' => 1,
                'cat_id' => 1,
                'image' => '160824167510.png',
            ];
        }


        \App\Models\Video::create($array);
    }
}
