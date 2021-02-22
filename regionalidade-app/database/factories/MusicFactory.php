<?php

namespace Database\Factories;

use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class MusicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Music::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'artist'   => $this->faker->sentence(2),
          'prod'   => $this->faker->sentence(2),
          'mix'   => $this->faker->sentence(2),
          'dist'   => $this->faker->sentence(2),
          'user_id'       => User::factory()

        ];
    }
}
