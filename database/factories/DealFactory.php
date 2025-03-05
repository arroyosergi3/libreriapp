<?php

namespace Database\Factories;
use App\Models\Book;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user1_id'   => User::all()->random()->id,
            'user2_id'   => User::all()->random()->id,
            'book1_id'   => Book::all()->random()->id,
            'book2_id'   => Book::all()->random()->id,
            'status'     => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            'date'       => $this->faker->date(),
        ];
    }
}
