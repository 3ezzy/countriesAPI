<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        Country::create([
            'name' => 'Morocco',
            'capital' => 'Rabat',
            'population' => 37457000,
            'continent' => 'Africa',
            'sub_region' => 'North Africa',
            'flag_url' => 'https://example.com/morocco-flag.png',
            'motto' => 'God, Homeland, King',
            'languages' => ['Arabic', 'Amazigh'],
            'additional_info' => 'Constitutional monarchy'
        ]);

        Country::create([
            'name' => 'France',
            'capital' => 'Paris',
            'population' => 67390000,
            'continent' => 'Europe',
            'sub_region' => 'Western Europe',
            'flag_url' => 'https://example.com/france-flag.png',
            'motto' => 'Liberty, Equality, Fraternity',
            'languages' => ['French'],
            'additional_info' => 'Republic'
        ]);

        // Add more countries as needed
    }
}