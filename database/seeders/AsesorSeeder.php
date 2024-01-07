<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\DataMigrater;
use App\Models\User;

class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', 0);
        User::where('rol_id', 2)->delete();
        $data = DataMigrater::ExcelArray('asesores.xlsx', 'app/db');
        $this->command->getOutput()->writeln("Extrayendo asesores:");
        $this->command->getOutput()->progressStart(count($data));
        foreach ($data as $row) {
            $this->command->getOutput()->progressAdvance();
            User::create([
                'rol_id' => 2,
                'nombre_usuario' => $row['nombre_usuario'],
                'apaterno_usuario' => $row['apaterno_usuario'],
                'amaterno_usuario' => $row['amaterno_usuario'],
                'email' => $row['email'],
                'password' => bcrypt($row['password']),
            ]);
        }
        $this->command->getOutput()->progressFinish();
    }
}
