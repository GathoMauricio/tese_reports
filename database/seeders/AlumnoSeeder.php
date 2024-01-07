<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('rol_id', 3)->delete();
        $this->command->getOutput()->writeln("Creando alumnos");
        User::factory()->count(120)->create();
        $this->command->getOutput()->writeln("Alumnos creados");
    }
}
