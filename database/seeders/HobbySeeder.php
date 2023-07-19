<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hobbies = [
            'Tennis',
            'Basketball',
            'Football',
            'Handball',
            'Musculation',
            'Lecture',
            'Chant',
            'Dessin',
            'Jeux vidéo',
        ];

        foreach ($hobbies as $hobby) {
            Hobby::create([
                'name' => $hobby
            ]);
        }
    }
}

