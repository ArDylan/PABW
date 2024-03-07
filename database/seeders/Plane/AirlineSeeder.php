<?php

namespace Database\Seeders\Plane;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Air Canada'],
            ['name' => 'Air France'],
            ['name' => 'Air India'],
            ['name' => 'Air New Zealand'],
            ['name' => 'Alaska Airlines'],
            ['name' => 'American Airlines'],
            ['name' => 'British Airways'],
            ['name' => 'Cathay Pacific'],
            ['name' => 'Delta Air Lines'],
            ['name' => 'Emirates'],
            ['name' => 'Etihad Airways'],
            ['name' => 'Finnair'],
            ['name' => 'Iberia'],
            ['name' => 'Japan Airlines'],
            ['name' => 'KLM'],
            ['name' => 'Lufthansa'],
            ['name' => 'Qantas'],
            ['name' => 'Qatar Airways'],
            ['name' => 'Singapore Airlines'],
        ])->each(fn ($airline) => \App\Models\Airline::create($airline));
    }
}
