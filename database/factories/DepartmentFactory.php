<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElements(['PPLG', 'Animasi 2D', 'Animasi 3D', 'Desain Grafis', 'Teknik Grafika']),
            'desc' => fake()->paragraph(5),
        ];
    }
}
