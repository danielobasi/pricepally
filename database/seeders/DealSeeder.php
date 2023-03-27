<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deals')->insert([
            'id' => 1,
            'product_id' => 1,
            'initial_slots' => 5,
            'available_slots' => 2,
            'expire_time' => Carbon::now()->addWeeks(2)->toDateTime(),
            'created_at' => now(),
        ]);

        DB::table('deals')->insert([
            'id' => 2,
            'product_id' => 2,
            'initial_slots' => 5,
            'available_slots' => 3,
            'expire_time' => Carbon::now()->addWeeks(2)->toDateTime(),
            'created_at' => now(),
        ]);
    }
}
