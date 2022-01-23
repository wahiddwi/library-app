<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['matematika', 'sejarah', 'biologi', 'religi', 'komputer'];

        foreach ($category as $value) {
            # code...
            Category::create([
                'category_name' => $value,
                'slug' => Str::slug($value)
            ]);
        }

    }
}
