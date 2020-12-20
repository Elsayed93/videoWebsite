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

        $youTubeArray = [
            'https://www.youtube.com/watch?v=EU7PRmCpx-0&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=1&t=7s',
            'https://www.youtube.com/watch?v=H3uRXvwXz1o&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=2&t=3s',
            'https://www.youtube.com/watch?v=sLFNVXY0APk&list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-&index=3'
        ];

        $id = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        for ($i = 0; $i < 10; $i++) {
            $array = [
                'name' => $faker->word,
                'meta_keywords' => $faker->name,
                'meta_des' => $faker->name,
                'des' => $faker->paragraph,
                'youtube' => $youTubeArray[rand(0, 2)],
                'published' => rand(0, 1),
                'user_id' => 1,
                'cat_id' => 1,
                'image' => '160824167510.png',
            ];
            $video = \App\Models\Video::create($array);
            $video->skills()->sync(array_rand($id, 2));
            $video->tags()->sync(array_rand($id, 3));
        }
    }
}
