<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brands_id' => '1',
            'categories_id' => '1',
            'name' => $slug = Str::random(10),
            'description' => $this->faker->sentence(),
            'price' => rand(100000, 500000),
            'slug' => Str::slug($slug),
            'tags' => Str::random(4)
        ];
    }
}
