<?php

namespace Database\Seeders;

use App\Models\Fueling;
use App\Models\GasStation;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        GasStation::factory()
            ->count(15)
            ->create();

        User::factory()
            ->count(15)
            ->has(Vehicle::factory()
                ->count(5)
                ->has(Fueling::factory()
                    ->count(30)
                    ->state([
                        'gas_station_id' => rand(1, 15)
                    ])
                )
            )
            ->create();
    }
}
