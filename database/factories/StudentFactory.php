<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'reg' => fake()->unique()->text(13),
            'cgpa' => fake()->randomFloat(2, 0, 3),
            'created_at' =>fake()->dateTime()
        ];
    }
}
