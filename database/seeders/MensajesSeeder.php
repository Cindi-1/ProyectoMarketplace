<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mensaje;

class MensajesSeeder extends Seeder
{
   
    public function run(): void
    {
        Mensaje::factory()->count(50)->create();
    }
}
