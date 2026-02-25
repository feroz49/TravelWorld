<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourGuide;

class TourGuideSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        // 15 random Tour Guides generate
        for ($i = 1; $i <= 15; $i++) {
            TourGuide::create([
                'name'       => $faker->name(),
                'photo'      => 'male-tourist' . rand(1,3) . '.jpg', // Random image 1,2,3
                'bio'        => $faker->sentence(),                  // Short bio
                'details'    => $faker->paragraph(3),               // Full details
                'experience' => rand(1, 20),                        // Experience in years
            ]);
        }
    }
}