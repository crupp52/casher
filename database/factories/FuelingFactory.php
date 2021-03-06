<?php

namespace Database\Factories;

use App\Models\Fueling;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuelingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fueling::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'traveled_distance' => $this->faker->numberBetween(300, 700),
            'refueled_quantity' => $this->faker->randomFloat(2, 10, 60),
            'date'              => today()->subDays(rand(0, 365)),
            'price'             => $this->faker->numberBetween(5000, 30000)
        ];
    }
}
