<?php

namespace Database\Factories;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recepie>
 */
class RecepieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'title'=> $this->faker->sentence(),
            'dish_type'=> $this->faker->sentence(),
            'image'=> $this->faker->imageUrl(),
            'Serves'=> $this->faker->numberBetween($min = 1, $max = 10),
            'preparation_time'=> $this->faker->numberBetween($min = 1, $max = 40),
            'cooking_time'=> $this->faker->numberBetween($min = 1, $max = 10),
            'ingredients'=> $this->faker->sentence(),
            'cuisine_type'=> $this->faker->sentence(),
            'difficulty'=> $this->faker->sentence(),
            'method'=> $this->faker->sentence(),
            'category' => categorie::inRandomOrder()->first(),
        ];
    }
}
