<?php

namespace Database\Factories;

use App\Models\BuyBy;
use App\Models\categorie;
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
            'price' => $this->faker->numberBetween($min = 1, $max = 1000),
            'description' => $this->faker->word(),
            'status' => $this->faker->sentence(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 100),
            'image' => $this->faker->imageUrl(),
            'category_id' => categorie::all()->random(),
            'buy_by_id' => BuyBy::all()->random(),
        ];
    }
}
