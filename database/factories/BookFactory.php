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
            'id' => Int::random(10),
            'isbn' => Int::random(10),
            'author' => fake()->name(),
            'title' => fake()->unique(),
            'description' => fake()->unique(),
            'date_published' => date::random(),

            
        ];
    }
}
