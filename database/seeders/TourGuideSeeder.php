<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourGuide;

class TourGuideSeeder extends Seeder
{
    public function run()
    {
        TourGuide::create([
            'name' => 'John Doe',
            'photo' => 'male-tourist1.jpg',
            'description' => 'Expert in European tours',
            'details' => 'John has 10 years of experience guiding tours across Europe.',
            'rating' => 5,
        ]);

        TourGuide::create([
            'name' => 'Maria Smith',
            'photo' => 'female-tourist1.jpg',
            'description' => 'Adventure & Trekking Specialist',
            'details' => 'Maria specializes in trekking tours worldwide.',
            'rating' => 5,
        ]);
    }
}