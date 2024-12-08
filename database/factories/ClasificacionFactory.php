<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clasificacion;

class ClasificacionFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'usuario_id' => fake()->numberBetween(1, 20),
            'calificador_id' => fake()->numberBetween(1, 20),
            'puntuacion' => fake()->numberBetween(1, 20),
            'comentario' => fake()->text(),
        ];
    }
}
