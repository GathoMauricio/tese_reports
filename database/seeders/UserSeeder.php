<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'rol_id' => 1,
            'nombre_usuario' => 'Oscar Mauricio',
            'email' => 'mauricio2769@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'id' => 2,
            'rol_id' => 1,
            'nombre_usuario' => 'Alejandra',
            'email' => 'ale@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'id' => 4,
            'rol_id' => 3,
            'nombre_usuario' => 'luis',
            'email' => 'luis@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'id' => 5,
            'rol_id' => 3,
            'nombre_usuario' => 'wendy',
            'email' => 'wendy@example.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
