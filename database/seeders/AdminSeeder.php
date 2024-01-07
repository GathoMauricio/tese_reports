<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->getOutput()->writeln("Creando administradores");
        User::create([
            'rol_id' => 1,
            'nombre_usuario' => 'Oscar Mauricio',
            'email' => 'mauricio2769@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'rol_id' => 1,
            'nombre_usuario' => 'Alejandra',
            'email' => 'ale@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $this->command->getOutput()->writeln("Administradoores creados");
    }
}
