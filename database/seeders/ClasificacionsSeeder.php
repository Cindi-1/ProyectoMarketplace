<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clasificacion;

class ClasificacionsSeeder extends Seeder
{
    
    public function run(): void
    {
        Clasificacion::factory()->count(50)->create();
    }
}
