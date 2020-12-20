<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $array = [
                'name' => $faker->word,
                'meta_keywords' => $faker->name,
                'meta_des' => $faker->name,
            ];
            \App\Models\Category::create($array);
        }
    }
}
