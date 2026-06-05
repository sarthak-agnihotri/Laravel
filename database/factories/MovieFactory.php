<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_name'=>fake()->words(2,true),
            'rating'=>fake()->numberBetween(1,5),
            'description'=>fake()->sentence(),
            'release_date'=>fake()->date(),
        ];
    }
}
