<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_ratings')->insert([
            'product_id' => 1,
            'user_id' => 1,
            'stars' => 4,
            'review' => 'Great experience',
            'created_at' => now(),
        ]);
        DB::table('product_ratings')->insert([
            'product_id' => 2,
            'user_id' => 1,
            'stars' => 5,
            'review' => 'Excellent',
            'created_at' => now(),
        ]);
    }
}
