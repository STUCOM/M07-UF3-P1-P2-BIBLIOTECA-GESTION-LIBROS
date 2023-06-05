<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Crea una instancia de Faker para generar datos aleatorios

        $books = \App\Models\Book::all(); // Obtiene todos los libros de la tabla books
        $categories = \App\Models\Category::all(); // Obtiene todas las categorías de la tabla categories
    
        foreach ($books as $book) {
            // Genera un número aleatorio entre 1 y 3 para determinar la cantidad de categorías asignadas a cada libro
            $randomCategories = $categories->random($faker->numberBetween(1, 3));
    
            foreach ($randomCategories as $category) {
                // Inserta un registro en la tabla pivot book_category con las claves foráneas book_id y category_id
                DB::table('book_category')->insert([
                    'book_id' => $book->id,
                    'category_id' => $category->id,
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
            }
        }
    }
}
