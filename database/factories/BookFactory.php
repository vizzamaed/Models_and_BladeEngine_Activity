<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'isbn' => fake()->numberBetween($min = 100000, $max = 200000),
            'author' => fake()->name(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'date_published' => fake()->date(),

            
        ];
    }
}
