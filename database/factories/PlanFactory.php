<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Plan;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'min_age' => $this->faker->numberBetween(0, 100),
            'max_age' => $this->faker->numberBetween(0, 100),
            'price' => $this->faker->randomFloat(0, 0, 99999.),
        
        ];
    }
}
