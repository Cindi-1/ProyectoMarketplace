<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(LibrosSeeder::class);

        $this->call(UsuariosSeeder::class);

        $this->call(ClasificacionsSeeder::class);

        $this->call(MensajesSeeder::class);
    }
}
