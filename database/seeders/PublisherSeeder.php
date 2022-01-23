<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = ['gramedia', 'erlangga', 'yudhistira'];

        foreach ($publisher as $key => $value) {
            # code...
            Publisher::create([
                'name' => $value,
                'slug' => Str::slug($value),
            ]);
        }

    }
}
