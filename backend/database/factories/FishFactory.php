<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fish>
 */
class FishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'price' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->sentence(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 100),
            'image' => $this->faker->imageUrl(),
            'category_id' => '1',
            'buy_by_id' => '1',
        ];
    }
}
