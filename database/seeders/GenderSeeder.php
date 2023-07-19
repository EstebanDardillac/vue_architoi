<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            'Mr',
            'Mme',
            'Non binaire',
            'Autres',
        ];

        foreach ($genders as $gender) {
            Gender::create([
                'name' => $gender
            ]);
        }
    }
}
