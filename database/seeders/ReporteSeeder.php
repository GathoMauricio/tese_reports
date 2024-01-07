<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\DataMigrater;
use App\Models\Reporte;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', 0);
        Reporte::truncate();
        $data = DataMigrater::ExcelArray('reportes.xlsx', 'app/db');
        $this->command->getOutput()->writeln("Extrayendo reportes:");
        $this->command->getOutput()->progressStart(count($data));
        foreach ($data as $row) {
            $this->command->getOutput()->progressAdvance();
            Reporte::create([
                'seccion_id' => $row['seccion_id'],
                'codigo_reporte' => $row['codigo_reporte'],
                'nombre_reporte' => $row['nombre_reporte'],
                'orientacion' => $row['orientacion'],
            ]);
        }
        $this->command->getOutput()->progressFinish();
    }
}
