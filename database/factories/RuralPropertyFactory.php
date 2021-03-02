<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use App\Models\RuralProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuralPropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RuralProperty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = array_rand(City::getCities());
        return [
          'name'=> $this->faker->name(),
          'city' => City::getCities()[$city],
          'street'=> $this->faker->streetName(),
          'zip_code'=> $this->faker->postcode(),
          'latitude'=> $this->faker->latitude(-50, 50),
          'longitude'=> $this->faker->longitude(-60, 60),
          'phone' => $this->faker->phoneNumber(),
          'user_id'=> User::factory()
        ];
    }
}
