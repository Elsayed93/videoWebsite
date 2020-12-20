<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class TagsSeeder extends Seeder
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
            ];
            \App\Models\Tag::create($array);
        }
    }
}
