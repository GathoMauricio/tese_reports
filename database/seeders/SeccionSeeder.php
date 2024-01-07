<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seccion;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccion::truncate();
        Seccion::create([
            'id' => 1,
            'nombre_seccion' => 'REPORTE',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-10',
        ]);
        Seccion::create([
            'id' => 2,
            'nombre_seccion' => 'PRIMER INFORME',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-10',
        ]);
        Seccion::create([
            'id' => 3,
            'nombre_seccion' => 'SEGUNDO INFORME',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-10',
        ]);
        Seccion::create([
            'id' => 4,
            'nombre_seccion' => 'TERCER INFORME',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-10',
        ]);
        Seccion::create([
            'id' => 5,
            'nombre_seccion' => 'ADMINISTRADOR',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-10',
        ]);
    }
}
