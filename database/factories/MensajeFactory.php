<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mensaje;

class MensajeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'contenido' => fake()->word(),
            'remitente_id' => fake()->numberBetween(1, 100),
            'resividor_id' => fake()->numberBetween(1, 100),
            'libro_id' => fake()->numberBetween(1, 100),
        ];
    }
}
