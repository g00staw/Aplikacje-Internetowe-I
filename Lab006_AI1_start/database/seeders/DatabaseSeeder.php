<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Wywołanie seederów w odpowiedniej kolejności
        $this->call([
            CountrySeeder::class,
            TripSeeder::class,
        ]);
    }
}