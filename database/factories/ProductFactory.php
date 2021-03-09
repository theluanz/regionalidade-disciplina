<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\RuralProperty;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product = new Product();
        $keys = array_keys($product->getUnits());        
        $rand = array_rand($keys, 1);
        return [
            'description'   => $this->faker->sentence(3),
            'price'         => $this->faker->randomFloat(2,0,1000),
            'user_id'       => User::factory(),
            'quantity'      => random_int(1,50),
            'unit'          => $keys[$rand],
            'rural_property_id' => RuralProperty::factory()
        ];
    }
}
