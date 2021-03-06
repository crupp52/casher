<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vehicle;
use Database\Factories\VehicleFactory;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
            Vehicle::factory()
                ->state([
                    'user_id' => $user->id
                ])
                ->count(5)
                ->create();
        }
    }
}
