<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seed default data, I added id  because i wanted to define the  name and image link myself
        //  but the drawback is that this cant be run more than once without deleting the old data because of expected  id conflict
        DB::table('categories')->insert([
            'id' => 1,
            'title' => 'Food Stuff',
            'image_url' => 'assets/images/foodstuff-img.png',
            'slug' => 'food-stuff',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'title' => 'Packaged Food',
            'image_url' => 'assets/images/packfood_img.png',
            'slug' => 'packaged-food',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'title' => 'Fruits and nuts',
            'image_url' => 'assets/images/fruits-img.png',
            'slug' => 'fruits-and-nuts',
            'created_at' => now(),
        ]);
    }
}
