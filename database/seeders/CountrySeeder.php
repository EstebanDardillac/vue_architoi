<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'France',
            'Espagne',
            'Portugal',
            'Italie',
            'Allemagne',
            'Angleterre',
            'Belgique',
            'Luxembourg',
            'Liechtenstein'
        ];

        foreach ($countries as $country) {
            Country::create([
                'name' => $country
            ]);
        }
    }
}

