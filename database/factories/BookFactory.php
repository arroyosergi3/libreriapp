<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
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
            'user_id' => User::inRandomOrder()->first()->id, // Usuario aleatorio
            'title' => $this->faker->sentence(4), // Título aleatorio
            'author' => $this->faker->name(), // Autor aleatorio
            'publisher' => $this->faker->company(), // Editorial aleatoria
            'isbn' => $this->faker->isbn13(), // ISBN aleatorio
            'pic' => $this->faker->imageUrl(), // Imagen aleatoria
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
