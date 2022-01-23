<?php

namespace Database\Seeders;

use App\Models\Rack;
use Illuminate\Database\Seeder;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6 ; $i++) {
            # code...
            Rack::create([
                'rack' => 1,
                'rows' => $i,
                'category_id' => 1,
                'slug' => 1 .'-' .$i,
            ]);
        }

    }
}
