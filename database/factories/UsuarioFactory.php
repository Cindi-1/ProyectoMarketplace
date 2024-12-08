<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class UsuarioFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'correo' => fake()->email(),
            'contraseña' => fake()->password()
        ];
    }
}
