<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deal_orders')->insert([
            'deal_id' => 1,
            'order_id' => 1,
            'slots' => 1,
            'created_at' => now(),
        ]);
        DB::table('deal_orders')->insert([
            'deal_id' => 1,
            'order_id' => 1,
            'slots' => 1,
            'created_at' => now(),
        ]);
        DB::table('deal_orders')->insert([
            'deal_id' => 1,
            'order_id' => 1,
            'slots' => 2,
            'created_at' => now(),
        ]);
        DB::table('deal_orders')->insert([
            'deal_id' => 2,
            'order_id' => 2,
            'slots' => 2,
            'created_at' => now(),
        ]);
        DB::table('deal_orders')->insert([
            'deal_id' => 2,
            'order_id' => 2,
            'slots' => 1,
            'created_at' => now(),
        ]);
    }
}
