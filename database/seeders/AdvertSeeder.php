<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adverts')->insert([
            'description' => 'Test advert one',
            'promo_image_url' => 'assets/images/slider1.jpg',
            'action_link' => '#',
            'created_at' => now(),
        ]);
        DB::table('adverts')->insert([
            'description' => 'Test advert two',
            'promo_image_url' => 'assets/images/slider2.jpg',
            'action_link' => '#',
            'created_at' => now(),
        ]);
        DB::table('adverts')->insert([
            'description' => 'Test advert three',
            'promo_image_url' => 'assets/images/slider1.jpg',
            'action_link' => '#',
            'created_at' => now(),
        ]);
        DB::table('adverts')->insert([
            'description' => 'Test advert four',
            'promo_image_url' => 'assets/images/slider2.jpg',
            'action_link' => '#',
            'created_at' => now(),
        ]);
        DB::table('adverts')->insert([
            'description' => 'Test advert five',
            'promo_image_url' => 'assets/images/slider1.jpg',
            'action_link' => '#',
            'created_at' => now(),
        ]);
    }
}
