<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recommended_products')->insert([
            'product_id' => 1,
            'initial_quantity' => 5,
            'available_quantity' => 3,
            'delivery_days' => 14,
            'unit' => 'kg',
            'created_at' => now(),
        ]);
        DB::table('recommended_products')->insert([
            'product_id' => 2,
            'initial_quantity' => 5,
            'available_quantity' => 3,
            'delivery_days' => 14,
            'unit' => 'kg',
            'created_at' => now(),
        ]);
    }
}
