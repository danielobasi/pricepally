<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'title' => 'Grain',
            'slug' => 'grain',
        ]);
        DB::table('sub_categories')->insert([
            'category_id' => 1,
            'title' => 'Tuber and Roots',
            'slug' => 'tuber-and-roots',
        ]);
    }
}
