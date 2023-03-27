<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            SubCategorySeeder::class,
            ProductSeeder::class,
            DealSeeder::class,
            AdvertSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            DealOrderSeeder::class,
            ProductRatingSeeder::class,
            RecommendationSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
