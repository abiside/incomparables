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
        $sources = [
            'Superlider' => [
                'category/tigres',
            ],
        ];

        foreach ($sources as $sourceName => $feeds) {
            $source = PostSource::create([
                'name' => $sourceName,
            ]);

            foreach ($feeds as $feed) {
                $source->feeds()->create([
                    'feed' => $feed,
                ]);
            }
        }

    }
}
