<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        return [
            'name' => fake()->randomElement(['Apprendre le Javascript', 'Débuté en Flutter', 'Les bases de Python', 'Le Big Data', 'Expert en Laravel']),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomNumber(5),
            'categorie_id' => rand(1,4),
            'user_id' => rand(1,3)
        ];
    }
}
