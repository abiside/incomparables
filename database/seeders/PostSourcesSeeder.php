<?php

namespace Database\Seeders;

use App\Models\PostSource;
use Illuminate\Database\Seeder;

class PostSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Save the main post sources
        PostSource::create([
            'name' => 'SoloTigres',
        ]);

        PostSource::create([
            'name' => 'Superlider',
        ]);
    }
}
