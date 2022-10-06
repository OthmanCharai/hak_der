<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->userName,
            'birth_day' => $this->faker->dateTime(),
            'email'=>$this->faker->safeEmail(),
            'password'=>Hash::make('password'),
            'gender' => 'Male',
            'nationality' => 'Türk | Turks',
            'sickness' => $this->faker->word,
            //'approved_at' => $this->faker->dateTime(),
            'address' => $this->faker->text,
            'zip_code' => $this->faker->word,
            'residence' => $this->faker->word,
            'furnale_place' => $this->faker->word,

            'phone_number' => $this->faker->phoneNumber,
            'mobile_number' => $this->faker->word,
            'birth_place'=>$this->faker->word
        ];
    }
}
