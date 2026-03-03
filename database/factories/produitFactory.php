<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom_p' => fake()->word(),
            'prix' => fake()->randomFloat(2, 10, 1000),
            'quantite' => fake()->numberBetween(1, 200),
            'description' => fake()->sentence(10),
        ];
    }
}
