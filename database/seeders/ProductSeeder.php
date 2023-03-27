<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'category_id' => 1,
            'sub_category_id' => 1,
            'name' => 'Irish Potato (5kg)',
            'price' => 73000,
            'previous_price' => 78000,
            'slug' => 'irish-potato',
            'season' => 'off',
            'cover_image_url' => 'assets/images/Product-img9.png',
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'sub_category_id' => 2,
            'name' => 'Soya Bean (100kg)',
            'price' => 73000,
            'previous_price' => 78000,
            'slug' => 'soya-bean-100kg',
            'season' => 'in',
            'cover_image_url' => 'assets/images/Product-img6.png',
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'sub_category_id' => 1,
            'name' => 'White Onions (40kg)',
            'price' => 73000,
            'previous_price' => 78000,
            'slug' => 'white-onions-40kg',
            'season' => 'in',
            'cover_image_url' => 'assets/images/Product-img3.png',
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'sub_category_id' => 2,
            'name' => 'Guinea corn red (Paint bucket)',
            'price' => 73000,
            'previous_price' => 78000,
            'slug' => 'guinea-corn-red',
            'season' => 'in',
            'cover_image_url' => 'assets/images/Product-img4.png',
            'created_at' => now(),
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'sub_category_id' => 2,
            'name' => 'Soya Bean (Paint bucket)',
            'price' => 73000,
            'previous_price' => 78000,
            'slug' => 'soya-bean-paint-bucket',
            'season' => 'in',
            'cover_image_url' => 'assets/images/Product-img6.png',
            'created_at' => now(),
        ]);
    }
}
