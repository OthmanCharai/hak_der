<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        'partner_name'=>$this->faker->name,
        'partner_username'=>$this->faker->userName,
        'partner_birth_day'=>$this->faker->dateTime(),
        'partner_gender'=>'Male',
        'partner_nationality'=>'Türk | Turks',
        'partner_sickness'=> $this->faker->word,
        'partner_birth_place'=> $this->faker->word,
        ];
    }
}
