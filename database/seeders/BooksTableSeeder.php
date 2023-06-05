<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'isbn' => $faker->isbn13,
                'title' => $faker->sentence,
                'author' => $faker->name,
                'published_date' => $faker->date,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 0, 100),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
