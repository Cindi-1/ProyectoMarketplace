<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

class LibroFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'autor' => fake()->name(),
            'descripcion' => fake()->text(),
            'precio' => fake()->numberBetween(1000, 10000),
            'usuario_id' => fake()->numberBetween(1, 20),
            'estado' => fake()->randomElement(['disponible', 'vendido']),
        ];
    }
}
