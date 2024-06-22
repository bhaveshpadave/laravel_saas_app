<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'available_credits' => 10,
        ]);

        Feature::create([
            'image' => 'https://img.freepik.com/free-photo/international-day-education-futuristic-style_23-2150998750.jpg',
            'route_name' => 'feature1.index',
            'name' => 'Calculate sum',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => '1',
            'active' => true,
        ]);

        Feature::create([
            'image' => 'https://img.freepik.com/free-photo/international-day-education-futuristic-style_23-2150998650.jpg',
            'route_name' => 'feature2.index',
            'name' => 'Calculate difference',
            'description' => 'Calculate difference of two numbers',
            'required_credits' => '3',
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 10,
            'credits' => 50
        ]);

        Package::create([
            'name' => 'Premium',
            'price' => 20,
            'credits' => 100
        ]);

    }
}
