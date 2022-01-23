<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Matematika',
            'slug' => Str::slug('matematika'),
            'cover' => 'matematika.jpg',
            'author' => 'muhammad arifin',
            'publisher_id' => 1,
            'category_id' => 1,
            'rack_id' => 1,
            'stock' => 6
        ]);

        Book::create([
            'title' => 'Rasulullah',
            'slug' => Str::slug('rasulullah'),
            'cover' => 'religi.jpg',
            'author' => 'Imam At-Tirmidzi',
            'publisher_id' => 1,
            'category_id' => 1,
            'rack_id' => 1,
            'stock' => 15
        ]);
    }
}
